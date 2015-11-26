module.exports = function (grunt) {
  'use strict';
// Project configuration
grunt.initConfig({
// Task configuration
cssmin: {
  minify: {
    expand: true,
    cwd: 'dist/css/',
    src: ['*.css', '!*.min.css'],
    dest: 'css/',
    ext: '.min.css'
  },
  combine: {
    files: {
      'css/vendor.min.css': [
      'js/bootstrap.daterangepicker/daterangepicker-bs3.css',
      'dist/css/flags16.css',
      'js/summernote/summernote.css',
      'js/bootstrap.switch/bootstrap-switch.css',
      'js/bootstrap/dist/css/bootstrap.css',
      'js/jquery.nanoscroller/nanoscroller.css',
      'js/bootstrap.switch/bootstrap-switch.css',
      'js/jquery.select2/select2.css',
      'js/jquery.icheck/skins/square/blue.css',
      'js/fuelux/css/fuelux.css',
      'js/fuelux/css/fuelux-responsive.min.css',
      'js/pace/pace-theme.css',
      'js/jquery.niftymodals/css/component.css',
      'js/jquery.morris/morris.css'
      ]
    }
  }
},watch: {
  all: {
    options: { livereload: true, debounceDelay: 100 },
    files: ['**/*.css'], //,'**/*.php','*.html'
    tasks: ['cssmin'],
  }
}

});
// These plugins provide necessary tasks
grunt.loadNpmTasks('grunt-contrib-cssmin');
grunt.loadNpmTasks('grunt-contrib-watch');
// Default task
grunt.registerTask('default', ['cssmin','watch']);

};

