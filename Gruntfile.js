module.exports = function( grunt ) {

    var paths = grunt.file.readJSON( 'grunt/paths.json' );

    // Project configuration.
    grunt.initConfig( {

        copy: {
            // copy bootstrap.min.js to assets
            bootstrap_js: {
                expand: true,
                flatten: true,
                src: [ 'node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js' ],
                dest: 'assets/js/'
            }
        },
        
        concat: {
            script: {
                src: paths.js,
                dest: 'assets/js/script.js'
            }
        },
        
        watch: {
            script: {
                files: [
                    'src/js/*.js',
                    'inc/modules/*/js/*.js'
                ],
                tasks: [ 'concat:script' ]
            }
        }
    } );

    grunt.registerTask( 'test', function( arg ) {
        grunt.log.writeln( '' );
    } );

    grunt.loadNpmTasks( 'grunt-contrib-watch' );
    grunt.loadNpmTasks( 'grunt-contrib-copy' );
    grunt.loadNpmTasks( 'grunt-contrib-concat' );

};
