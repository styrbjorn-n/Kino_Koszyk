tailwind.config = {
  theme: {
    extend: {
      fontFamily: {
        heading: ['Playfair Display'],
        text: ['Karla']
      },
      height: {
        footer: '311px'
      },
      fontSize:{
        // desktopMenu: ['40', '150%'],
        desktopH1: ['128px', '128px'],
        desktopH2: ['46px', '56px'],
        desktopH3: ['38px', '46px'],
        desktopH4: ['30px', '150%'],
        desktopLink: ['20px', '18px'],
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
        mobileP: ['16px', '150%']
      },
        textColor: {
          'primary': '#333333',
          'secondary': '#C4C4C4',
          'grayshade': '#8F8989',
          'hover': '#FE4E30',
    },
    }
  },
};
