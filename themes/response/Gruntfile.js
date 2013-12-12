module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        
        
        compass: {
          dist: {
            options: {
              config: 'config.rb'
            }
          }
        },
        
        concat: {
          dist: {
            src: [
              'js/foundation/foundation.js',
              //'js/foundation/foundation.abide.js',
              //'js/foundation/foundation.alerts.js',
              //'js/foundation/foundation.clearing.js',
              //'js/foundation/foundation.cookie.js',
              //'js/foundation/foundation.dropdown.js',
              'js/foundation/foundation.forms.js',
              'js/foundation/foundation.interchange.js',
              //'js/foundation/foundation.joyride.js',
              //'js/foundation/foundation.magellan.js',
              //'js/foundation/foundation.orbit.js',
              'js/foundation/foundation.placeholder.js',
              //'js/foundation/foundation.reveal.js',
              //'js/foundation/foundation.section.js',
              //'js/foundation/foundation.alerts.js',
              //'js/foundation/foundation.tooltips.js',
              'js/foundation/foundation.topbar.js',
              'js/foundation.js',
              'js/boxes.js'
            ],
            dest: 'js/build/production.js',
          }
        },
        
        uglify: {
          build: {
            src: 'js/build/production.js',
            dest: 'js/build/production.min.js'
          }
        },
        
        watch: {
          options: {
            livereload: true,
          },
          scripts: {
            files: ['js/*.js'],
            tasks: ['concat', 'uglify'],
            options: {
              spawn: false,
            }
          },
          css: {
            files: ['scss/*.scss'],
            tasks: ['compass'],
          },
        },
  
      });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['compass', 'concat', 'uglify', 'watch']);

};


