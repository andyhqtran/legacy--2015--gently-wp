module.exports = function(grunt) {
  require('jit-grunt')(grunt);

  grunt.initConfig({
    less: {
      development: {
        options: {
          compress: false,
          yuicompress: true,
          optimization: 2,
          sourceMap: false
        },
        files: {
          "style.css": "assets/less/style.less"
        }
      }
    },
    haml: {
      dist: {
        files: {
          'assets/haml/html/index.html': 'assets/haml/index.haml',
          'assets/haml/html/header.html': 'assets/haml/header.haml',
          'assets/haml/html/footer.html': 'assets/haml/footer.haml',

          'assets/haml/html/page-home.html': [
            'assets/haml/header.haml',
            'assets/haml/navbar.haml',
            'assets/haml/hero.haml',
            'assets/haml/page-home.haml',
            'assets/haml/footer.haml'
          ],

          'assets/haml/html/page-about.html': [
            'assets/haml/header.haml',
            'assets/haml/navbar.haml',
            'assets/haml/page-header.haml',
            'assets/haml/page-about.haml',
            'assets/haml/footer.haml'
          ]
        }
      }
    },
    watch: {
      styles: {
        files: ['assets/less/*.less', 'assets/haml/*.haml'],
        tasks: ['less', 'haml'],
        options: {
          nospawn: true,
          livereload: true
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-haml');

  grunt.registerTask('default', ['less', 'haml', 'watch']);
};