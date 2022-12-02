module.exports = {
  build: [

    // Frontend - See includes/enqueue.php

    // {
    //   src: 'assets/src/index.js',
    //   dest: 'assets/build/tangible-field-example.min.js'
    // },
    // {
    //   src: 'assets/src/index.scss',
    //   dest: 'assets/build/tangible-field-example.min.css'
    // },

    // Admin

    {
      src: 'assets/src/admin.scss',
      dest: 'assets/build/admin.min.css'
    },
  ],
  format: [
    'assets/src',
    'includes',
    '*.{php,js,json}'
  ]
}