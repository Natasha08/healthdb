module.exports = function(grunt) {
	// Project configuration. 
grunt.initConfig({
  concat: {
    js: {
      src: ['js/app.js', 'js/blur.js', 'js/panel.js', 'js/ratiocal.js'],
      dest: 'build/js/scripts.js',
    },
    css: {
      src: ['css/landingpage.css', 'css/login.css', 'css/main.css', 'css/normalize.css'],
      dest: 'build/css/styles.css',
    },
  },
  watch: {
  js: {
    files: ['js/**/*.js'],
    tasks: ['concat'],
  },
  css: {
    files: ['css/**/*.css'],
    tasks: ['concat'],
  },
},

});
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.registerTask('default', ['concat', 'watch']);

};