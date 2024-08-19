/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/views/*.blade.php",
      "./resources/views/**/*.blade.php",
      "./resources/views/components/*.blade.php",
      "./resources/views/pages/*.blade.php",
      "./resources/views/sections/*.blade.php",
      // "./resources/**/*.js",
      // "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors: {
         'brand-light-green': '#82AD37',
         'brand-dark-green': '#054E3B',
         'brand-green': '#037856',
         'brand-bright-green': '#77BC22',
         'brand-tlg-twenty' : 'rgba(130, 173, 55, 0.2)',
         'brand-tlg-five' : 'rgba(130, 173, 55, 0.05)',
         'brand-tlg-ten' : 'rgba(130, 173, 55, 0.1)',
         'basic-black' : '#272727',
         'required-red' : '#CD201F',
        //  'text-muted' : 'rgba(46, 62, 57, 0.5)',
        //  'semi-black' : '#18181B',
        //  'off-black' : '#1E1E1E',
        //  'tinted-black' : '#383A47',
         'gray-one' : '#F2F2F2',
         'gray-two' : '#EDEDEB',
         'gray-three' : '#D8D8D8',
         'stroke' : '#E8E8E8',
         'approved-blue' : '#40C9AB',
         'pending-yellow' : '#DBA400',
         'denied-red' : '#CA4B3D',
         'theme-dark-blue' : '#181E58',
        },
      },
    },
    plugins: [],
  }

