module.exports = function(grunt) {
  grunt.initConfig({
    pkg : grunt.file.readJSON('package.json'),
    concat : {
      options : {
        separator : ';'
      },
      dist : {
        src  : ['src/*.js'],
        dest : 'dist/js/<%= pkg.name %>.js'
      }
    },
    jshint : {
      beforeconcat : ['src/*.js'],
      afterconcat  : ['dist/js/<%= pkg.name %>.js']
    },
    less : {
      development : {
        options : {
          paths : ['less']
        },
        files : {
          'dist/css/<%= pkg.name %>.css' : 'less/<%= pkg.name %>.less'
        }
      },
      production : {
        options : {
          banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n',
          compress : true,
          paths : ['less']
        },
        files : {
          'dist/css/<%= pkg.name %>.min.css' : 'less/<%= pkg.name %>.less'
        }
      }
    },
    uglify : {
      options : {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      dist : {
        src  : 'src/<%= pkg.name %>.js',
        dest : 'dist/js/<%= pkg.name %>.min.js'
      }
    }
  });
  
  // Load the plugins
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Default task(s).
  grunt.registerTask('default', ['concat', 'jshint', 'less', 'uglify']);
};
