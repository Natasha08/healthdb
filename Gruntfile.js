module.exports = function(grunt) {
	// Project configuration. 
grunt.initConfig({
  concat: {
    dist: {
      src: ['js/app.js', 'js/blur.js', 'js/panel.js', 'js/ratiocal.js'],
      dest: 'build/script.js',
    },
  },
});
	grunt.loadNpmTasks('grunt-contrib-concat');
};