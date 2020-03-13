particlesJS('sideNav',
	{
    "particles": {
      "number": {
        "value": 150,
        "density": {
          "enable": true,
          "value_area": 600
        }
      },
      "color": {
        "value": "#ffffff"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 0.5,
        "random": false,
        "anim": {
          "enable": false,
          "speed": 1,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 5,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 2,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 100,
        "color": "#ffffff",
        "opacity": 0.4,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 1,
        "direction": "none",
        "random": true,
        "straight": false,
        "out_mode": "out",
        "attract": {
          "enable": true,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": true,
          "mode": "repulse"
        },
        "onclick": {
          "enable": false,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 400,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 400,
          "size": 40,
          "duration": 2,
          "opacity": 8,
          "speed": 2
        },
        "repulse": {
          "distance": 80,
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true,
  }
);

function openProject(projectID)
{
	console.log("Open project with id " + projectID);
	
	$.ajax({
			method: "POST",
			timeout: 10000,
			url: "get_project",
			data: {
					"id": projectID,
					"isAJAX" : "true"
				  },
			dataType: "JSON"
		}).done(function(data)
		{
			if (data != null)
			{
				let parsed_data = JSON.parse(data);
				console.log(parsed_data);
				console.log(parsed_data.nom);
				console.log(parsed_data.description);
				$("#myModal").modal("toggle");
				
			}
			else
			{
				console.log("project not found.");
			}
		}).fail(function(jqXHR)
		{
            console.log("Failed");
		});
}

function openSkill(skillID)
{
	console.log("Open skill with id " + skillID);
	
	$.ajax({
			method: "POST",
			timeout: 10000,
			url: "get_skill",
			data: {
					"id": skillID,
					"isAJAX" : "true"
				  },
			dataType: "JSON"
		}).done(function(data)
		{
			if (data != null)
			{
				let parsed_data = JSON.parse(data);
				console.log(parsed_data);
				console.log(parsed_data.nom);
				console.log(parsed_data.description);
				$("#myModal").modal("toggle");
				
			}
			else
			{
				console.log("project not found.");
			}
		}).fail(function(jqXHR)
		{
            console.log("Failed");
		});
}

class Navigation {
	constructor() {
		this.datas = [];
		this.currentIndex = 0;
	}
	
	push(data) {
		this.datas.push(data)
	}
	
	prev() {
		if (this.currentIndex > 0 && this.datas.count)
	}
}