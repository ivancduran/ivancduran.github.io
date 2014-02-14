'use strict';
module.exports = function(grunt){
grunt.registerTask('watch', [ 'watch' ]);
	grunt.initConfig({

		pkg : grunt.file.readJSON('package.json'),

		"sass" : {
			"dev" : {
				options: {
				        style: 'extended',
				        noCache : true
				      },
				files : {
					"css/reset.css"            : "sass/reset.scss",
					"css/grid.css"             : "sass/grid.scss",
					"css/style.css"            : "sass/style.scss",
					"css/media.css"            : "sass/media.scss",
					"css/responsiveslides.css" : "sass/responsiveslides.scss",
					"css/menu.css"             : "sass/menu.scss",
					"css/buttons.css"          : "sass/buttons.scss",
					"css/font.css"             : "sass/font.scss",
					"css/progressbar.css"      : "sass/progressbar.scss",
					"css/tooltip.css"          : "sass/tooltip.scss",
					"css/caption.css"          : "sass/caption.scss",
					"css/anim.css"             : "sass/anim.scss",
					"css/modal.css"            : "sass/modal.scss",
					"css/custom.css"           : "sass/custom.scss"
				}
			},
			"dist" : {
				options: {
			        style: 'compressed',
			        noCache : true
			      },
				files : {
					"css/compile.css" : "sass/compile.scss"
				}
			}
		},
		"uglify" : {
			"dist" : {
				files : {
					"js/kraken.min.js" : "js/kraken.js"
				}
			}
		},
		watch: {
	      js: {
	        files: ['js/*.js'],
	        tasks: ['uglify:dist'],
	        options: {
	          livereload: true,
	        }
	      },
	      css: {
	        files: ['sass/*.scss'],
	        tasks: ['sass:dev', 'sass:dist'],
	        options: {
	          livereload: true,
	        }
	      }
	    }


	});

grunt.loadNpmTasks('grunt-contrib-sass');
grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.registerTask('default', ['sass:dev', 'uglify:dist']);

};