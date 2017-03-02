module.exports = function ( grunt ) {

    // Project configuration.
    grunt.initConfig( {
        pkg: grunt.file.readJSON( 'package.json' ),
        paths: grunt.file.readJSON( 'grunt/paths.json' ),
        archive: grunt.file.readJSON( 'grunt/archive.json' ),
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
                src: '<%= paths.js %>',
                dest: 'assets/js/script.js'
            }
        },

        compress: {
            release: {
                options: {
                    archive: '<%= archive.archive_dir %>/<%= pkg.name %>/<%= pkg.name %>-<%= pkg.version %>.zip'
                },
                files: [ {
                        expand: true,
                        src: '<%= archive.release %>',
                        dest: '<%= pkg.name %>/'
                    } ]
            },
            dev: {
                options: {
                    archive: '<%= archive.archive_dir %>/<%= pkg.name %>/<%= pkg.name %>-dev.zip'
                },
                files: [ {
                        expand: true,
                        src: '<%= archive.dev %>',
                        dest: '<%= pkg.name %>/'
                    } ]
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

    grunt.registerTask( 'test', function ( arg ) {
        grunt.log.writeln( '' );
    } );

    grunt.loadNpmTasks( 'grunt-contrib-watch' );
    grunt.loadNpmTasks( 'grunt-contrib-copy' );
    grunt.loadNpmTasks( 'grunt-contrib-concat' );
    grunt.loadNpmTasks( 'grunt-contrib-compress' );

};
