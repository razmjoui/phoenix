/** @type {Partial<CustomThemeConfig & {extend: Partial<CustomThemeConfig>}> & DefaultTheme} */
const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
    content: ["../**/*.{html,js,php}"],
    darkMode: 'class',
    theme: {
        screens: {
            sm: "576px",
            md: "768px",
            lg: "992px",
            xl: "1200px",
            '2xl': "1400px",
        },
        extend: {
            fontFamily:{
                body: ['var(--fontBody)' , ...defaultTheme.fontFamily.sans],
                head: ['var(--fontHead)' , ...defaultTheme.fontFamily.sans],
                text: ['var(--fontText)' , ...defaultTheme.fontFamily.sans],
                link: ['var(--fontLink)' , ...defaultTheme.fontFamily.sans],
                btn: ['var(--fontBtn)' , ...defaultTheme.fontFamily.sans],
                label: ['var(--fontLabel)' , ...defaultTheme.fontFamily.sans],
                select: ['var(--fontSelect)' , ...defaultTheme.fontFamily.sans],
                list: ['var(--fontList)' , ...defaultTheme.fontFamily.sans],

            },
            colors: {
                primary: 'var(--primary)',
                secondary: 'var(--secondary)',
                bg: 'var(--bg)',
                header: 'var(--header)',
                headerHover: 'var(--headerHover)',
                text: 'var(--text)',
                textHover: 'var(--textHover)',
                paragraph: 'var(--paragraph)',
                list: 'var(--list)',
                link: 'var(--link)',
                linkHover: 'var(--linkHover)',
                success: 'var(--success)',
                warning: 'var(--warning)',
                danger: 'var(--danger)',
                gradientStart: 'var(--gradientStart)',
                gradientEnd: 'var(--gradientEnd)',
                btnBg: 'var(--btnBg)',
                btnText: 'var(--btnText)',
                label: 'var(--label)',
                inputBg: 'var(--inputBg)',
                inputText: 'var(--inputText)',
                selectBg: 'var(--selectBg)',
                selectText: 'var(--selectText)',

                primaryD: 'var(--primaryD)',
                secondaryD: 'var(--secondaryD)',
                bgD: 'var(--bgD)',
                headerD: 'var(--headerD)',
                headerHoverD: 'var(--headerHoverD)',
                textD: 'var(--textD)',
                textHoverD: 'var(--textHoverD)',
                paragraphD: 'var(--paragraphD)',
                listD: 'var(--listD)',
                linkD: 'var(--linkD)',
                linkHoverD: 'var(--linkHoverD)',
                successD: 'var(--successD)',
                warningD: 'var(--warningD)',
                dangerD: 'var(--dangerD)',
                gradientStartD: 'var(--gradientStartD)',
                gradientEndD: 'var(--gradientEndD)',
                btnBgD: 'var(--btnBgD)',
                btnTextD: 'var(--btnTextD)',
                labelD: 'var(--labelD)',
                inputBgD: 'var(--inputBgD)',
                inputTextD: 'var(--inputTextD)',
                selectBgD: 'var(--selectBgD)',
                selectTextD: 'var(--selectTextD)',









                'light': 'rgba(var(--light), <alpha-value>)',
                'dark': 'rgba(var(--dark), <alpha-value>)',



                'dark-400': 'rgba(var(--dark400), <alpha-value>)',
                'dark-50': 'rgba(var(--dark50), <alpha-value>)',
                'dark-100': 'rgba(var(--dark100), <alpha-value>)',
                'dark-200': 'rgba(var(--dark200), <alpha-value>)',
                'dark-450': 'rgba(var(--dark450), <alpha-value>)',
                'dark-500': 'rgba(var(--dark500), <alpha-value>)',
                'dark-550': 'rgba(var(--dark550), <alpha-value>)',
                'dark-650': 'rgba(var(--dark650), <alpha-value>)',
                'dark-660': 'rgba(var(--dark660), <alpha-value>)',
                'dark-700': 'rgba(var(--dark700), <alpha-value>)',
                'dark-750': 'rgba(var(--dark750), <alpha-value>)',
                'dark-800': 'rgba(var(--dark800), <alpha-value>)',
                'dark-890': 'rgba(var(--dark890), <alpha-value>)',
                'dark-900': 'rgba(var(--dark900), <alpha-value>)',
                'dark-910': 'rgba(var(--dark910), <alpha-value>)',
                'dark-920': 'rgba(var(--dark920), <alpha-value>)',
                'dark-930': 'rgba(var(--dark930), <alpha-value>)',
                'dark-940': 'rgba(var(--dark940), <alpha-value>)',
                'dark-950': 'rgba(var(--dark950), <alpha-value>)',




                biscay:{
                    100: 'rgba(var(--biscay100), <alpha-value>)',
                    650: 'rgba(var(--biscay650), <alpha-value>)',
                    700: 'rgba(var(--biscay700), <alpha-value>)',
                    500: 'rgba(var(--biscay500), <alpha-value>)',
                    50: 'rgba(var(--biscay50), <alpha-value>)',
                    400: 'rgba(var(--biscay400), <alpha-value>)',
                    300: 'rgba(var(--biscay300), <alpha-value>)',
                },
            },
        },
        container: {
            screens: {
                sm: "540px",
                md: "720px",
                lg: "960px",
                xl: "1140px",
                '2xl': "1320px",
            },
            center: true,
        },
    },
    plugins: [],
}

