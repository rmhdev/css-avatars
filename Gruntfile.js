/*!
 * CSS avatar's Gruntfile
 * https://github.com/rmhdev/css-avatars
 * Copyright 2015 Rober Martín H
 * Licensed under MIT
 */

module.exports = function (grunt) {
    'use strict';

    // Force use of Unix newlines
    grunt.util.linefeed = '\n';

    // Project configuration.
    grunt.initConfig({

        // Metadata.
        pkg: grunt.file.readJSON('package.json'),
        banner: '/*!\n' +
            ' * CSS avatars v<%= pkg.version %> (<%= pkg.homepage %>)\n' +
            ' * Copyright <%= grunt.template.today("yyyy") %> <%= pkg.author %>\n' +
            ' * Licensed under <%= pkg.license %>\n' +
            ' */\n',

        less: {
            compileCore: {
                files: {
                    'dist/css/<%= pkg.name %>.css': 'less/<%= pkg.name %>.less'
                }
            }
        },

        cssmin: {
            options: {
                compatibility: 'ie8',
                keepSpecialComments: '*'
            },
            core: {
                files: {
                    'dist/css/<%= pkg.name %>.min.css': 'dist/css/<%= pkg.name %>.css'
                }
            }
        },

        usebanner: {
            options: {
                position: 'top',
                banner: '<%= banner %>'
            },
            files: {
                src: 'dist/css/*.css'
            }
        },

        watch: {
            less: {
                files: 'less/*.less',
                tasks: 'less'
            }
        },

        compress: {
            main: {
                options: {
                    mode: 'zip',
                    archive: 'dist/<%= pkg.name %>-<%= pkg.version %>-dist.zip'
                },
                expand: true,
                src: ['dist/**'],
                dest: '<%= pkg.name %>-<%= pkg.version %>-dist'
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-compress');
    grunt.loadNpmTasks('grunt-banner');

    // CSS distribution task.
    grunt.registerTask('less-compile', ['less:compileCore']);
    grunt.registerTask('dist-css', ['less-compile', 'usebanner', 'cssmin']);
    grunt.registerTask('default', ['watch']);

};
