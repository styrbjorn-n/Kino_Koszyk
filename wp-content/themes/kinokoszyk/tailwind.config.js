tailwind.config = {
  theme: {
    extend: {
      boxShadow: {
        'book': '8px 10px 6px #978888',
      },
      screens: {
        'xs': { 'raw': '(min-height: 400px)' },
        // => @media (min-height: 800px) { ... }
      },
      fontFamily: {
        heading: ['Playfair Display'],
        text: ['Karla']
      },
      height: {
        footer: '311px',
        contactF1: '40px',
        contactF2: '168px',
        button: '44px'
      },
      width: {
        button: '141px'
      },
      fontSize:{
        desktopH1: ['120px', '128px'],
        desktopH2: ['46px', '56px'],
        desktopH3: ['38px', '46px'],
        desktopH4: ['30px', '150%'],
        desktopLink: ['20px', '26px'],
        desktopP: ['24px', '150%'],
        
        tabletMenu: ['40px', '150%'],
        tabletH1: ['96px', '96px'],
        tabletH2: ['39px', '44px'],
        tabletH3: ['28px', '34px'],
        tabletH4: ['25px', '150%'],
        tabletLink: ['16px', '150%'],
        tabletP: ['20px', '150%'],
        
        mobileMenu: ['36px', '48px'],
        mobileHeaderLink: ['16px', '28px'],
        mobileH1: ['48px', '48px'],
        mobileH2: ['32px', '38px'],
        mobileH3: ['25px', '28px'],
        mobileH4: ['20px', '24px'],
        mobileLink: ['14px', '150%'],
        mobileP: ['16px', '150%'],

        desktopPlace: ['20px', '26px'],

        button: ['24px', '28px']
      },
        textColor: {
          'primary': '#333333',
          'secondary': '#CA0000',
          'grayshade': '#8F8989',
          'hover': '#CA0000',
          'current-item': '#333333'
    },
    colors: {
      'grey': '#818181',
      'lightgrey':'#E2E2E2',
      'buttonRed': '#CA0000',
      'hoverRed': 'FF0000',
    }
    }
  },
};
