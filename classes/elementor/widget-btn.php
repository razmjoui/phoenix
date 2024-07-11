<?php
namespace RazmE;


use Razm\Controls_Manager;
use Razm\Icons_Manager;
use Razm\Widget_Base;

class Razmnix_Widget_Btn extends Widget_Base
{


    public function get_name(): string
    {
        return 'btn';
    }

    public function get_title(): string
    {

        return esc_html__('button', 'razmnix');
    }


    public function get_icon(): string
    {
        return 'eicon-button';
    }

    public function get_categories(): array
    {
        return ['razmnixWidgets'];
    }

    protected function register_controls()
    {

        $this->start_controls_section('auth_btn_section', [
            'label' => 'تنظمیات دکمه',
            'tab' => Controls_Manager::TAB_CONTENT,
        ]);
        $this->add_control('style_btn', [
            'type' => Controls_Manager::SELECT,
            'label' => esc_html__('style', 'textdomain'),
            'options' => [
                //				'1' => esc_html__( 'style' , 'textdomain' ) . ' 1' ,
                '1' => esc_html__('style', 'textdomain') . ' 1',
                '2' => esc_html__('style', 'textdomain') . ' 2',
                '3' => esc_html__('style', 'textdomain') . ' 3',
                '4' => esc_html__('style', 'textdomain') . ' 4',
                '5' => esc_html__('style', 'textdomain') . ' 5',
                '6' => esc_html__('style', 'textdomain') . ' 6',
                '7' => esc_html__('style', 'textdomain') . ' 7',
                '8' => esc_html__('style', 'textdomain') . ' 8',
                '9' => esc_html__('style', 'textdomain') . ' 9',
                '10' => esc_html__('style', 'textdomain') . ' 10',
                '11' => esc_html__('style', 'textdomain') . ' 11',
                '12' => esc_html__('style', 'textdomain') . ' 12',
                '13' => esc_html__('style', 'textdomain') . ' 13',
                '14' => esc_html__('style', 'textdomain') . ' 14',
                '15' => esc_html__('style', 'textdomain') . ' 15',
                '16' => esc_html__('style', 'textdomain') . ' 16',
                '17' => esc_html__('style', 'textdomain') . ' 17',
                '18' => esc_html__('style', 'textdomain') . ' 18',
                '19' => esc_html__('style', 'textdomain') . ' 19',
                '20' => esc_html__('style', 'textdomain') . ' 20',
                '21' => esc_html__('style', 'textdomain') . ' 21',
                '22' => esc_html__('style', 'textdomain') . ' 22',
                '23' => esc_html__('style', 'textdomain') . ' 23',
                '24' => esc_html__('style', 'textdomain') . ' 24',
                '25' => esc_html__('style', 'textdomain') . ' 25',
                '26' => esc_html__('style', 'textdomain') . ' 26',
                '27' => esc_html__('style', 'textdomain') . ' 27',
                '28' => esc_html__('style', 'textdomain') . ' 28',
                '29' => esc_html__('style', 'textdomain') . ' 29',
                '30' => esc_html__('style', 'textdomain') . ' 30',
                '31' => esc_html__('style', 'textdomain') . ' 31',
                '32' => esc_html__('style', 'textdomain') . ' 32',
                '33' => esc_html__('style', 'textdomain') . ' 33',
                '34' => esc_html__('style', 'textdomain') . ' 34',
                '35' => esc_html__('style', 'textdomain') . ' 35',
                '36' => esc_html__('style', 'textdomain') . ' 36',
                '37' => esc_html__('style', 'textdomain') . ' 37',
                '38' => esc_html__('style', 'textdomain') . ' 38',
                '39' => esc_html__('style', 'textdomain') . ' 39',
                '40' => esc_html__('style', 'textdomain') . ' 40',
                '41' => esc_html__('style', 'textdomain') . ' 41',
                '42' => esc_html__('style', 'textdomain') . ' 42',
                '43' => esc_html__('style', 'textdomain') . ' 43',
                '44' => esc_html__('style', 'textdomain') . ' 44',
                '45' => esc_html__('style', 'textdomain') . ' 45',
                '46' => esc_html__('style', 'textdomain') . ' 46',
                //				'47'  => esc_html__( 'style' , 'textdomain' ) . ' 47' ,
                //				'48'  => esc_html__( 'style' , 'textdomain' ) . ' 48' ,
                //				'49'  => esc_html__( 'style' , 'textdomain' ) . ' 49' ,
                //				'50'  => esc_html__( 'style' , 'textdomain' ) . ' 50' ,
                //				'51'  => esc_html__( 'style' , 'textdomain' ) . ' 51' ,
                //				'52'  => esc_html__( 'style' , 'textdomain' ) . ' 52' ,
                //				'53'  => esc_html__( 'style' , 'textdomain' ) . ' 53' ,
                //				'54'  => esc_html__( 'style' , 'textdomain' ) . ' 54' ,
                //				'55'  => esc_html__( 'style' , 'textdomain' ) . ' 55' ,
                //				'56'  => esc_html__( 'style' , 'textdomain' ) . ' 56' ,
                //				'57'  => esc_html__( 'style' , 'textdomain' ) . ' 57' ,
                //				'58'  => esc_html__( 'style' , 'textdomain' ) . ' 58' ,
                //				'59'  => esc_html__( 'style' , 'textdomain' ) . ' 59' ,
                //				'60'  => esc_html__( 'style' , 'textdomain' ) . ' 60' ,
                //				'61'  => esc_html__( 'style' , 'textdomain' ) . ' 61' ,
                //				'62'  => esc_html__( 'style' , 'textdomain' ) . ' 62' ,
                //				'63'  => esc_html__( 'style' , 'textdomain' ) . ' 63' ,
                //				'64'  => esc_html__( 'style' , 'textdomain' ) . ' 64' ,
                //				'65'  => esc_html__( 'style' , 'textdomain' ) . ' 65' ,
                //				'66'  => esc_html__( 'style' , 'textdomain' ) . ' 66' ,
                //				'67'  => esc_html__( 'style' , 'textdomain' ) . ' 67' ,
                //				'68'  => esc_html__( 'style' , 'textdomain' ) . ' 68' ,
                //				'69'  => esc_html__( 'style' , 'textdomain' ) . ' 69' ,
                //				'70'  => esc_html__( 'style' , 'textdomain' ) . ' 70' ,
                //				'71'  => esc_html__( 'style' , 'textdomain' ) . ' 71' ,
                //				'72'  => esc_html__( 'style' , 'textdomain' ) . ' 72' ,
                //				'73'  => esc_html__( 'style' , 'textdomain' ) . ' 73' ,
                //				'74'  => esc_html__( 'style' , 'textdomain' ) . ' 74' ,
                //				'75'  => esc_html__( 'style' , 'textdomain' ) . ' 75' ,
                //				'76'  => esc_html__( 'style' , 'textdomain' ) . ' 76' ,
                //				'77'  => esc_html__( 'style' , 'textdomain' ) . ' 77' ,
                //				'78'  => esc_html__( 'style' , 'textdomain' ) . ' 78' ,
                //				'79'  => esc_html__( 'style' , 'textdomain' ) . ' 79' ,
                //				'80'  => esc_html__( 'style' , 'textdomain' ) . ' 80' ,
                //				'81'  => esc_html__( 'style' , 'textdomain' ) . ' 81' ,
                //				'82'  => esc_html__( 'style' , 'textdomain' ) . ' 82' ,
                //				'83'  => esc_html__( 'style' , 'textdomain' ) . ' 83' ,
                //				'84'  => esc_html__( 'style' , 'textdomain' ) . ' 84' ,
                //				'85'  => esc_html__( 'style' , 'textdomain' ) . ' 85' ,
                //				'86'  => esc_html__( 'style' , 'textdomain' ) . ' 86' ,
                //				'87'  => esc_html__( 'style' , 'textdomain' ) . ' 87' ,
                //				'88'  => esc_html__( 'style' , 'textdomain' ) . ' 88' ,
                //				'89'  => esc_html__( 'style' , 'textdomain' ) . ' 89' ,
                //				'90'  => esc_html__( 'style' , 'textdomain' ) . ' 90' ,
                //				'91'  => esc_html__( 'style' , 'textdomain' ) . ' 91' ,
                //				'92'  => esc_html__( 'style' , 'textdomain' ) . ' 92' ,
                //				'93'  => esc_html__( 'style' , 'textdomain' ) . ' 93' ,
                //				'94'  => esc_html__( 'style' , 'textdomain' ) . ' 94' ,
                //				'95'  => esc_html__( 'style' , 'textdomain' ) . ' 95' ,
                //				'96'  => esc_html__( 'style' , 'textdomain' ) . ' 96' ,
                //				'97'  => esc_html__( 'style' , 'textdomain' ) . ' 97' ,
                //				'98'  => esc_html__( 'style' , 'textdomain' ) . ' 98' ,
                //				'99'  => esc_html__( 'style' , 'textdomain' ) . ' 99' ,
                //				'100' => esc_html__( 'style' , 'textdomain' ) . ' 100'
            ],
            'default' => '1',
        ]);

        $this->add_control('title-btn', [
            'type' => Controls_Manager::TEXT,
            'label' => esc_html__('Title', 'razmnix'),
            'placeholder' => esc_html__('Enter your title', 'razmnix'),
        ]);
        $this->add_control('icon', [
            'label' => esc_html__('Icon', 'textdomain'),
            'type' => Controls_Manager::ICONS,
            'default' => [
                'value' => 'fas fa-circle',
                'library' => 'fa-solid',
            ],
            'recommended' => [
                'fa-solid' => [
                    'circle',
                    'dot-circle',
                    'square-full',
                ],
                'fa-regular' => [
                    'circle',
                    'dot-circle',
                    'square-full',
                ],
            ],
        ]);


        $this->end_controls_section();


        $this->start_controls_section('style_section', [
            'label' => esc_html__('Style', 'textdomain'),
            'tab' => Controls_Manager::TAB_STYLE,
        ]);
        $this->add_control('font_family', [
            'label' => esc_html__('Font Family', 'textdomain'),
            'type' => Controls_Manager::FONT,
            'default' => "'IranSans','Open Sans', sans-serif",
            'selectors' => [
                '{{WRAPPER}} .your-class' => 'font-family: {{VALUE}}',
            ],
        ]);

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        ?>


        <?php
        switch ($settings['style_btn']):
            case '1';

                ?>
                <!-- 1 -->

                <a href="#_" class="relative inline-block text-lg group">
            <span class="relative z-10 block px-5 py-3 overflow-hidden font-medium leading-tight text-gray-800 transition-colors duration-300 ease-out border-2 border-gray-900 rounded-lg group-hover:text-white">
              <span class="absolute inset-0 w-full h-full px-5 py-3 rounded-lg bg-gray-50"></span>
              <span class="absolute left-0 w-48 h-48 -ml-2 transition-all duration-300 origin-top-right -rotate-90 -translate-x-full translate-y-12 bg-gray-900 group-hover:-rotate-180 ease"></span>
              <span class="relative"><?= esc_html($settings['title-btn']); ?></span>
            </span>
                    <span class="absolute bottom-0 right-0 w-full h-12 -mb-1 -mr-1 transition-all duration-200 ease-linear bg-gray-900 rounded-lg group-hover:mb-0 group-hover:mr-0"
                          data-rounded="rounded-lg"></span>
                </a>

                <?php
                break;

            case '2';
                ?>
                <!-- 2 -->

                <a href="#_" target="_blank"
                   class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold shadow text-indigo-600 transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 group">
                    <span class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-indigo-600 group-hover:h-full"></span>
                    <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
              <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                   xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
              </svg>
            </span>
                    <span class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
              <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                   xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
              </svg>
            </span>
                    <span class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white"><?= esc_html($settings['title-btn']); ?></span>
                </a>


                <?php
                break;
            case '3';
                ?>
                <!-- 3 -->

                <a href="#_" class="relative px-5 py-2 font-medium text-white group">
                    <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-purple-500 group-hover:bg-purple-700 group-hover:skew-x-12"></span>
                    <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-purple-700 group-hover:bg-purple-500 group-hover:-skew-x-12"></span>
                    <span class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-purple-600 -rotate-12"></span>
                    <span class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-purple-400 -rotate-12"></span>
                    <span class="relative"><?= esc_html($settings['title-btn']); ?></span>
                </a>

                <?php
                break;
            case '4';
                ?>
                <!-- 4  -->

                <div class="flex items-center justify-center">
                    <a href="#_"
                       class="rounded-md px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-indigo-600 text-indigo-600 ">
                        <span class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-indigo-600 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                        <span class="relative text-indigo-600 transition duration-300 group-hover:text-white ease"><?= esc_html($settings['title-btn']); ?></span>
                    </a>
                </div>
                <?php
                break;
            case '5';
                ?>
                <!-- 5 -->

                <a href="#_" class="px-5 py-2.5 relative rounded group font-medium text-white inline-block">
                    <span class="absolute top-0 left-0 w-full h-full rounded opacity-50 filter blur-sm bg-gradient-to-br from-purple-600 to-blue-500"></span>
                    <span class="h-full w-full inset-0 absolute mt-0.5 ml-0.5 bg-gradient-to-br filter group-active:opacity-0 rounded opacity-50 from-purple-600 to-blue-500"></span>
                    <span class="absolute inset-0 w-full h-full transition-all duration-200 ease-out rounded shadow-xl bg-gradient-to-br filter group-active:opacity-0 group-hover:blur-sm from-purple-600 to-blue-500"></span>
                    <span class="absolute inset-0 w-full h-full transition duration-200 ease-out rounded bg-gradient-to-br to-purple-600 from-blue-500"></span>
                    <span class="relative"><?= esc_html($settings['title-btn']); ?></span>
                </a>

                <?php
                break;
            case'6';
                ?>
                <!-- 6 -->

                <a href="#_"
                   class="px-5 py-2.5 relative rounded group overflow-hidden font-medium bg-white text-purple-600 inline-block">
                    <span class="absolute top-0 left-0 flex w-full h-0 mb-0 transition-all duration-200 ease-out transform translate-y-0 bg-purple-600 group-hover:h-full opacity-90"></span>
                    <span class="relative group-hover:text-white"><?= esc_html($settings['title-btn']); ?></span>
                </a>

                <?php
                break;
            case'7';
                ?>
                <!-- 7 -->

                <a href="#_"
                   class="rounded relative inline-flex group items-center justify-center px-3.5 py-2 m-1 cursor-pointer border-b-4 border-l-2 active:border-purple-600 active:shadow-none shadow-lg bg-gradient-to-tr from-purple-600 to-purple-500 border-purple-700 text-white">
                    <span class="absolute w-0 h-0 transition-all duration-300 ease-out bg-white rounded-full group-hover:w-32 group-hover:h-32 opacity-10"></span>
                    <span class="relative"><?= esc_html($settings['title-btn']); ?></span>
                </a>


                <?php
                break;
            case'8';
                ?>
                <!-- 8 -->

                <a href="#_" class="inline-flex overflow-hidden text-white bg-gray-900 rounded group">
            <span class="px-3.5 py-2 text-white bg-purple-500 group-hover:bg-purple-600 flex items-center justify-center">
<!--                <i class = "fa-solid fa-bag-shopping text-xl"></i>-->
                <!--                <i class = "text-xl --><?php //= esc_html( $settings[ 'icon' ] );
                ?><!--"></i>-->
                <?php Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']); ?>
            </span>
                    <span class="pl-4 pr-5 py-2.5"><?= esc_html($settings['title-btn']); ?></span>
                </a>


                <?php
                break;
            case'9';
                ?>
                <!-- 9 -->

                <a href="#_"
                   class="relative inline-flex items-center px-12 py-3 overflow-hidden text-lg font-medium text-indigo-600 border-2 border-indigo-600 rounded-full hover:text-white group hover:bg-gray-50">
                    <span class="absolute left-0 block w-full h-0 transition-all bg-indigo-600 opacity-100 group-hover:h-full top-1/2 group-hover:top-0 duration-400 ease"></span>
                    <span class="absolute right-0 flex items-center justify-start w-10 h-10 duration-300 transform translate-x-full group-hover:translate-x-0 ease">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                   xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
              </svg>
            </span>
                    <span class="relative"><?= esc_html($settings['title-btn']); ?></span>
                </a>


                <?php
                break;
            case'10';
                ?>
                <!-- 10 -->

                <a href="#_" class="relative px-6 py-3 font-bold text-black group">
                    <span class="absolute inset-0 w-full h-full transition duration-300 ease-out transform -translate-x-2 -translate-y-2 bg-red-300 group-hover:translate-x-0 group-hover:translate-y-0"></span>
                    <span class="absolute inset-0 w-full h-full border-4 border-black"></span>
                    <span class="relative"><?= esc_html($settings['title-btn']); ?></span>
                </a>


                <?php
                break;
            case'11';
                ?>
                <!-- 11 -->

                <a href="#_"
                   class="relative rounded px-5 py-2.5 overflow-hidden group bg-green-500 hover:bg-gradient-to-r hover:from-green-500 hover:to-green-400 text-white hover:ring-2 hover:ring-offset-2 hover:ring-green-400 transition-all ease-out duration-300">
                    <span class="absolute right-0 w-8 h-32 -mt-12 transition-all duration-1000 transform translate-x-12 bg-white opacity-10 rotate-12 group-hover:-translate-x-40 ease"></span>
                    <span class="relative"><?= esc_html($settings['title-btn']); ?></span>
                </a>


                <?php
                break;
            case'12';
                ?>

                <!-- 12 -->

                <a href="#_"
                   class="relative inline-flex items-center justify-center p-4 px-5 py-3 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out rounded-full shadow-xl group hover:ring-1 hover:ring-purple-500">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-br from-blue-600 via-purple-600 to-pink-700"></span>
                    <span class="absolute bottom-0 right-0 block w-64 h-64 mb-32 mr-4 transition duration-500 origin-bottom-left transform rotate-45 translate-x-24 bg-pink-500 rounded-full opacity-30 group-hover:rotate-90 ease"></span>
                    <span class="relative text-white"><?= esc_html($settings['title-btn']); ?></span>
                </a>


                <?php
                break;
            case'13';
                ?>

                <!-- 13 -->

                <a href="#_"
                   class="relative px-10 py-3 font-medium text-white transition duration-300 bg-green-400 rounded-md hover:bg-green-500 ease">
            <span class="absolute bottom-0 left-0 h-full -ml-2">
              <svg viewBox="0 0 487 487" class="w-auto h-full opacity-100 object-stretch"
                   xmlns="http://www.w3.org/2000/svg">
                <path d="M0 .3c67 2.1 134.1 4.3 186.3 37 52.2 32.7 89.6 95.8 112.8 150.6 23.2 54.8 32.3 101.4 61.2 149.9 28.9 48.4 77.7 98.8 126.4 149.2H0V.3z"
                      fill="#FFF" fill-rule="nonzero" fill-opacity=".1"></path>
              </svg>
            </span>
                    <span class="absolute top-0 right-0 w-12 h-full -mr-3">
              <svg viewBox="0 0 487 487" class="object-cover w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <path d="M487 486.7c-66.1-3.6-132.3-7.3-186.3-37s-95.9-85.3-126.2-137.2c-30.4-51.8-49.3-99.9-76.5-151.4C70.9 109.6 35.6 54.8.3 0H487v486.7z"
                      fill="#FFF" fill-rule="nonzero" fill-opacity=".1"></path>
              </svg>
            </span>
                    <span class="relative"><?= esc_html($settings['title-btn']); ?></span>
                </a>

                <?php
                break;
            case'14';
                ?>

                <!-- 14 -->

                <a href="#_"
                   class="relative px-5 py-3 overflow-hidden font-medium text-gray-600 bg-white border border-gray-100 rounded-lg shadow-inner group">
                    <span class="absolute top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-gray-600 group-hover:w-full ease"></span>
                    <span class="absolute bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-gray-600 group-hover:w-full ease"></span>
                    <span class="absolute top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-gray-600 group-hover:h-full ease"></span>
                    <span class="absolute bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-gray-600 group-hover:h-full ease"></span>
                    <span class="absolute inset-0 w-full h-full duration-300 delay-300 bg-gray-900 opacity-0 group-hover:opacity-100"></span>
                    <span class="relative transition-colors duration-300 delay-200 group-hover:text-white ease"><?= esc_html($settings['title-btn']); ?></span>
                </a>


                <?php
                break;
            case'15';
                ?>

                <!-- 15 -->

                <a href="#_"
                   class="box-border relative z-30 inline-flex items-center justify-center w-auto px-8 py-3 overflow-hidden font-bold text-white transition-all duration-300 bg-indigo-600 rounded-md cursor-pointer group ring-offset-2 ring-1 ring-indigo-300 ring-offset-indigo-200 hover:ring-offset-indigo-500 ease focus:outline-none">
                    <span class="absolute bottom-0 right-0 w-8 h-20 -mb-8 -mr-5 transition-all duration-300 ease-out transform rotate-45 translate-x-1 bg-white opacity-10 group-hover:translate-x-0"></span>
                    <span class="absolute top-0 left-0 w-20 h-8 -mt-1 -ml-12 transition-all duration-300 ease-out transform -rotate-45 -translate-x-1 bg-white opacity-10 group-hover:translate-x-0"></span>
                    <span class="relative z-20 flex items-center text-sm">
              <svg class="relative w-5 h-5 mr-2 text-white" fill="none" stroke="currentColor"
                   viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M13 10V3L4 14h7v7l9-11h-7z"></path>
              </svg>
              <?= esc_html($settings['title-btn']) ?>
            </span>
                </a>


                <?php
                break;
            case'16';
                ?>
                <!-- 16 -->

                <a href="#_"
                   class="relative z-30 inline-flex items-center justify-center w-auto px-8 py-3 overflow-hidden font-bold text-gray-500 transition-all duration-500 border border-gray-200 rounded-md cursor-pointer group ease bg-gradient-to-b from-white to-gray-50 hover:from-gray-50 hover:to-white active:to-white">
                    <span class="w-full h-0.5 absolute bottom-0 group-active:bg-transparent left-0 bg-gray-100"></span>
                    <span class="h-full w-0.5 absolute bottom-0 group-active:bg-transparent right-0 bg-gray-100"></span>
                    <?= esc_html($settings['title-btn']) ?>
                </a>

                <?php
                break;
            case'17';
                ?>

                <!-- 17 -->

                <a href="#_" class="relative inline-block px-4 py-2 font-medium group">
                    <span class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-black group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                    <span class="absolute inset-0 w-full h-full bg-white border-2 border-black group-hover:bg-black"></span>
                    <span class="relative text-black group-hover:text-white"><?= esc_html($settings['title-btn']); ?></span>
                </a>

                <?php
                break;
            case'18';
                ?>

                <!-- 18 -->

                <a href="#_"
                   class="relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out border-2 border-purple-500 rounded-full shadow-md group">
            <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-purple-500 group-hover:translate-x-0 ease">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                   xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
              </svg>
            </span>
                    <span class="absolute flex items-center justify-center w-full h-full text-purple-500 transition-all duration-300 transform group-hover:translate-x-full ease"><?= esc_html($settings['title-btn']); ?></span>
                    <span class="relative invisible"><?= esc_html($settings['title-btn']); ?></span>
                </a>


                <?php
                break;
            case'19';
                ?>

                <!-- 19 -->

                <a href="#_"
                   class="relative items-center justify-center inline-block p-4 px-5 py-3 overflow-hidden font-medium text-indigo-600 rounded-lg shadow-2xl group">
                    <span class="absolute top-0 left-0 w-40 h-40 -mt-10 -ml-3 transition-all duration-700 bg-red-500 rounded-full blur-md ease"></span>
                    <span class="absolute inset-0 w-full h-full transition duration-700 group-hover:rotate-180 ease">
              <span class="absolute bottom-0 left-0 w-24 h-24 -ml-10 bg-purple-500 rounded-full blur-md"></span>
              <span class="absolute bottom-0 right-0 w-24 h-24 -mr-10 bg-pink-500 rounded-full blur-md"></span>
            </span>
                    <span class="relative text-white"><?= esc_html($settings['title-btn']); ?></span>
                </a>


                <?php
                break;
            case'20';
                ?>

                <!-- 20 -->

                <a href="#_"
                   class="relative inline-flex items-center justify-start px-6 py-3 overflow-hidden font-medium transition-all bg-red-500 rounded-xl group">
            <span class="absolute top-0 right-0 inline-block w-4 h-4 transition-all duration-500 ease-in-out bg-red-700 rounded group-hover:-mr-4 group-hover:-mt-4">
              <span class="absolute top-0 right-0 w-5 h-5 rotate-45 translate-x-1/2 -translate-y-1/2 bg-white"></span>
            </span>
                    <span class="absolute bottom-0 left-0 w-full h-full transition-all duration-500 ease-in-out delay-200 -translate-x-full translate-y-full bg-red-600 rounded-2xl group-hover:mb-12 group-hover:translate-x-0"></span>
                    <span class="relative w-full text-left text-white transition-colors duration-200 ease-in-out group-hover:text-white"><?= esc_html($settings['title-btn']); ?></span>
                </a>

                <?php
                break;
            case'21';
                ?>

                <!-- 21 -->

                <a href="#_"
                   class="px-5 py-2.5 font-medium bg-blue-100/60 hover:bg-blue-100 hover:text-blue-600 text-blue-500 rounded-lg text-sm">
                    <?= esc_html($settings['title-btn']) ?>
                </a>

                <?php
                break;
            case'22';
                ?>


                <!-- 22 -->

                <a href="#_"
                   class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-blue-600 border border-blue-700 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                   data-rounded="rounded-md" data-primary="blue-600" data-primary-reset="{}">
                    <?= esc_html($settings['title-btn']) ?>
                </a>

                <?php
                break;
            case'23';
                ?>

                <!-- 23 -->

                <a href="#_"
                   class="inline-flex items-center px-6 py-3 text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200 hover:text-gray-600">
                    <?= esc_html($settings['title-btn']) ?>
                </a>

                <?php
                break;
            case'24';
                ?>


                <!-- 24 -->

                <a href="#_"
                   class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-gray-600 whitespace-no-wrap bg-white border border-gray-200 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:shadow-none">
                    <?= esc_html($settings['title-btn']) ?>
                </a>

                <?php
                break;
            case'25';
                ?>


                <!-- 25 -->

                <a href="#_"
                   class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 bg-gray-900 rounded-lg hover:bg-gray-800 focus:shadow-outline focus:outline-none">
                    <?= esc_html($settings['title-btn']) ?>
                </a>


                <?php
                break;
            case'26';
                ?>
                <!-- 26 -->

                <a href="#_"
                   class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-indigo-100 border border-indigo-500 rounded-lg shadow-sm cursor-pointer hover:text-white bg-gradient-to-br from-purple-500 via-indigo-500 to-indigo-500">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <span class="relative"><?= esc_html($settings['title-btn']); ?></span>
                </a>


                <?php
                break;
            case'27';
                ?>

                <!-- 27 -->

                <a href="#_"
                   class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-bold leading-6 text-white bg-indigo-600 border border-transparent rounded-full md:w-auto hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                    <?= esc_html($settings['title-btn']) ?>
                </a>

                <?php
                break;
            case'28';
                ?>

                <!-- 28 -->

                <a href="#_"
                   class="inline-flex items-center justify-center w-full px-6 py-3 mb-2 text-lg text-white bg-green-500 rounded-md hover:bg-green-400 sm:w-auto sm:mb-0"
                   data-primary="green-400" data-rounded="rounded-2xl" data-primary-reset="{}">
                    <?= esc_html($settings['title-btn']) ?>
                    <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>


                <?php
                break;
            case'29';
                ?>
                <!-- 29 -->

                <a href="#_" class="relative px-6 py-3 font-bold text-white rounded-lg group">
                    <span class="absolute inset-0 w-full h-full transition duration-300 transform -translate-x-1 -translate-y-1 bg-purple-800 ease opacity-80 group-hover:translate-x-0 group-hover:translate-y-0"></span>
                    <span class="absolute inset-0 w-full h-full transition duration-300 transform translate-x-1 translate-y-1 bg-pink-800 ease opacity-80 group-hover:translate-x-0 group-hover:translate-y-0 mix-blend-screen"></span>
                    <span class="relative"><?= esc_html($settings['title-btn']); ?></span>
                </a>

                <?php
                break;
            case'30';
                ?>

                <!-- 30 -->

                <a href="#_"
                   class="relative inline-flex items-center justify-center px-6 py-3 overflow-hidden font-bold text-black hover:text-white rounded-md shadow-2xl group">
                    <span class="absolute inset-0 w-full h-full transition duration-300 ease-out opacity-0 bg-gradient-to-br from-pink-600 via-purple-700 to-blue-400 group-hover:opacity-100"></span>
                    <!-- Top glass gradient -->
                    <span class="absolute top-0 left-0 w-full bg-gradient-to-b from-white to-transparent opacity-5 h-1/3"></span>
                    <!-- Bottom gradient -->
                    <span class="absolute bottom-0 left-0 w-full h-1/3 bg-gradient-to-t from-white to-transparent opacity-5"></span>
                    <!-- Left gradient -->
                    <span class="absolute bottom-0 left-0 w-4 h-full bg-gradient-to-r from-white to-transparent opacity-5"></span>
                    <!-- Right gradient -->
                    <span class="absolute bottom-0 right-0 w-4 h-full bg-gradient-to-l from-white to-transparent opacity-5"></span>
                    <span class="absolute inset-0 w-full h-full border border-white rounded-md opacity-10"></span>
                    <span class="absolute w-0 h-0 transition-all duration-300 ease-out bg-white rounded-full group-hover:w-56 group-hover:h-56 opacity-5"></span>
                    <span class="relative"><?= esc_html($settings['title-btn']); ?></span>
                </a>


                <?php
                break;
            case'31';
                ?>


                <!-- 31 -->

                <a href="#_"
                   class="relative p-0.5 inline-flex items-center justify-center font-bold overflow-hidden group rounded-md">
                    <span class="w-full h-full bg-gradient-to-br from-[#ff8a05] via-[#ff5478] to-[#ff00c6] group-hover:from-[#ff00c6] group-hover:via-[#ff5478] group-hover:to-[#ff8a05] absolute"></span>
                    <span class="relative px-6 py-3 transition-all ease-out bg-gray-900 rounded-md group-hover:bg-opacity-0 duration-400">
              <span class="relative text-white"><?= esc_html($settings['title-btn']); ?></span>
            </span>
                </a>

                <?php
                break;
            case'32';
                ?>

                <!-- 32 -->

                <a href="#_"
                   class="relative inline-flex items-center justify-start px-5 py-3 overflow-hidden font-bold rounded-full group">
                    <span class="w-32 h-32 rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-black opacity-[3%]"></span>
                    <span class="absolute top-0 left-0 w-48 h-48 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-black opacity-100 group-hover:-translate-x-8"></span>
                    <span class="relative w-full text-left text-blbg-black transition-colors duration-200 ease-in-out group-hover:text-gray-200"><?= esc_html($settings['title-btn']); ?></span>
                    <span class="absolute inset-0 border-2 border-blbg-black rounded-full"></span>
                </a>

                <?php
                break;
            case'33';
                ?>

                <!-- 33 -->

                <a href="#_"
                   class="relative items-center justify-start inline-block px-5 py-3 overflow-hidden font-medium transition-all shadow bg-blue-600 rounded-full hover:bg-white group">
                    <span class="absolute inset-0 border-0 group-hover:border-[25px] ease-linear duration-100 transition-all border-white rounded-full"></span>
                    <span class="relative w-full text-left text-white transition-colors duration-200 ease-in-out group-hover:text-blue-600"><?= esc_html($settings['title-btn']); ?></span>
                </a>

                <?php
                break;
            case'34';
                ?>

                <!-- 34 -->

                <a href="#_"
                   class="relative inline-flex items-center justify-start px-6 py-3 overflow-hidden font-medium transition-all shadow bg-white rounded hover:bg-white group">
                    <span class="w-48 h-48 rounded rotate-[-40deg] bg-purple-600 absolute bottom-0 left-0 -translate-x-full ease-out duration-500 transition-all translate-y-full mb-9 ml-9 group-hover:ml-0 group-hover:mb-32 group-hover:translate-x-0"></span>
                    <span class="relative w-full text-left text-black transition-colors duration-300 ease-in-out group-hover:text-white"><?= esc_html($settings['title-btn']); ?></span>
                </a>

                <?php
                break;
            case'35';
                ?>

                <!-- 35 -->

                <a href="#_"
                   class="relative inline-flex items-center justify-center px-6 py-3 text-lg font-medium tracking-tighter text-white bg-transparent shadow rounded-md group">
                    <span class="absolute inset-0 w-full h-full mt-1 ml-1 transition-all duration-300 ease-in-out bg-purple-600 rounded-md group-hover:mt-0 group-hover:ml-0"></span>
                    <span class="absolute inset-0 w-full h-full bg-white rounded-md "></span>
                    <span class="absolute inset-0 w-full h-full transition-all duration-200 ease-in-out delay-100 bg-purple-600 rounded-md opacity-0 group-hover:opacity-100 "></span>
                    <span class="relative text-purple-600 transition-colors duration-200 ease-in-out delay-100 group-hover:text-white"><?= esc_html($settings['title-btn']); ?></span>
                </a>


                <?php
                break;
            case'36';
                ?>

                <!-- 36 -->

                <a href="#_"
                   class="relative inline-flex items-center justify-center px-10 py-4 overflow-hidden font-mono font-medium tracking-tighter text-white bg-gray-800 rounded-lg group">
                    <span class="absolute w-0 h-0 transition-all duration-500 ease-out bg-green-500 rounded-full group-hover:w-56 group-hover:h-56"></span>
                    <span class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-700"></span>
                    <span class="relative"><?= esc_html($settings['title-btn']); ?></span>
                </a>

                <?php
                break;
            case'37';
                ?>

                <!-- 37 -->

                <a href="#_"
                   class="inline-flex items-center w-full px-5 py-3 mb-3 mr-1 text-base font-semibold text-white no-underline align-middle bg-blue-600 border border-transparent border-solid rounded-md cursor-pointer select-none sm:mb-0 sm:w-auto hover:bg-blue-700 hover:border-blue-700 hover:text-white focus-within:bg-blue-700 focus-within:border-blue-700">
                    <?= esc_html($settings['title-btn']) ?>
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>

                <?php
                break;
            case'38';
                ?>
                <!-- 38 -->

                <a href="#_"
                   class="relative inline-block w-auto px-6 py-3 overflow-hidden text-base font-semibold text-center shadow text-gray-800 rounded-lg bg-gray-50 hover:text-black hover:bg-white">
                    <?= esc_html($settings['title-btn']) ?>
                </a>


                <?php
                break;
            case'39';
                ?>
                <!-- 39 -->

                <a href="#_"
                   class="px-10 py-4 text-xl font-semibold text-center text-white transition duration-300 rounded-lg hover:from-purple-600 hover:to-pink-600 ease bg-gradient-to-br from-purple-500 to-pink-500 md:w-auto">
                    <?= esc_html($settings['title-btn']) ?>
                </a>


                <?php
                break;
            case'40';
                ?>
                <!-- 40 -->

                <a href="#_"
                   class="inline-flex items-center justify-center h-16 px-10 py-0 text-xl font-semibold text-center text-gray-900 no-underline align-middle transition-all duration-300 ease-in-out bg-transparent border-2 border-gray-600 border-solid rounded-full cursor-pointer select-none hover:text-blue-600 hover:border-blue-600 focus:shadow-xs focus:no-underline">
                    <?= esc_html($settings['title-btn']) ?>
                </a>


                <?php
                break;
            case'41';
                ?>

                <!-- 41 -->

                <a href="#_"
                   class="inline-block py-4 text-xl text-white bg-gray-800 px-7 hover:bg-gray-700 rounded-xl">
                    <?= esc_html($settings['title-btn']) ?>
                </a>


                <?php
                break;
            case'42';
                ?>
                <!-- 42 -->

                <a href="#_"
                   class="inline-block px-5 py-2 mx-auto text-white bg-blue-600 rounded-full hover:bg-blue-700 md:mx-0">
                    <?= esc_html($settings['title-btn']) ?>
                </a>


                <?php
                break;
            case'43';
                ?>
                <!-- 43 -->

                <a href="#_"
                   class="inline-block items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-sky-500 border-2 border-transparent rounded-full shadow-sm hover:bg-transparent hover:text-sky-500 hover:border-sky-500 focus:outline-none">
                    <?= esc_html($settings['title-btn']) ?>
                </a>


                <?php
                break;
            case'44';
                ?>

                <!-- 44 -->

                <a href="#_"
                   class="w-full py-4 text-xl text-center text-white transition-colors duration-300 bg-green-400 rounded-full hover:bg-green-500 ease px-9 md:w-auto">
                    <?= esc_html($settings['title-btn']) ?>
                </a>

                <?php
                break;
            case'45';
                ?>

                <!-- 45 -->

                <button class="btn p-4 relative border-0 uppercase text-amber-300 shadow bg-transparent hover:delay-[.5s] transition-all duration-500 hover:text-white before:absolute before:left-0 before:bottom-0 before:h-[2px] before:w-0 before:transition-all before:duration-500 before:bg-amber-300 before:hover:w-full after:absolute after:left-0 after:bottom-0 after:h-0 after:w-full after:transition-all after:duration-500 after:bg-amber-300 after:hover:h-full after:text-white after:-z-10 after:hover:delay-[0.4s]">
                    <?= esc_html($settings['title-btn']) ?>
                </button>


                <?php
                break;
            case'46';
                ?>
                <style>

                    @property --border-angle-1 {
                        syntax: "<angle>";
                        inherits: true;
                        initial-value: 0deg;
                    }

                    @property --border-angle-2 {
                        syntax: "<angle>";
                        inherits: true;
                        initial-value: 90deg;
                    }

                    @property --border-angle-3 {
                        syntax: "<angle>";
                        inherits: true;
                        initial-value: 180deg;
                    }


                    :root {
                        --bright-blue: rgb(0, 100, 255);
                        --bright-green: rgb(0, 255, 0);
                        --bright-red: rgb(255, 0, 0);
                        --background: black;
                        --foreground: white;
                        --border-size: 2px;
                        --border-radius: 0.75em;
                    }

                    @supports (color: color(display-p3 1 1 1)) {
                        :root {
                            --bright-blue: color(display-p3 0 0.2 1);
                            --bright-green: color(display-p3 0.4 1 0);
                            --bright-red: color(display-p3 1 0 0);
                        }
                    }

                    @keyframes rotateBackground {
                        to {
                            --border-angle-1: 360deg;
                        }
                    }

                    @keyframes rotateBackground2 {
                        to {
                            --border-angle-2: -270deg;
                        }
                    }

                    @keyframes rotateBackground3 {
                        to {
                            --border-angle-3: 540deg;
                        }
                    }

                    button {
                        --border-angle-1: 0deg;
                        --border-angle-2: 90deg;
                        --border-angle-3: 180deg;
                        color: inherit;
                        font-size: calc(0.8rem + 4vmin);
                        font-family: inherit;
                        border: 0;
                        padding: var(--border-size);
                        display: flex;
                        width: max-content;
                        border-radius: var(--border-radius);
                        background-color: transparent;
                        background-image: conic-gradient(
                                from var(--border-angle-1) at 10% 15%,
                                transparent,
                                var(--bright-blue) 10%,
                                transparent 30%,
                                transparent
                        ),
                        conic-gradient(
                                from var(--border-angle-2) at 70% 60%,
                                transparent,
                                var(--bright-green) 10%,
                                transparent 60%,
                                transparent
                        ),
                        conic-gradient(
                                from var(--border-angle-3) at 50% 20%,
                                transparent,
                                var(--bright-red) 10%,
                                transparent 50%,
                                transparent
                        );
                        animation: rotateBackground 3s linear infinite,
                        rotateBackground2 8s linear infinite,
                        rotateBackground3 13s linear infinite;
                    }

                    button div {
                        background: var(--background);
                        padding: 1em 1.5em;
                        border-radius: calc(var(--border-radius) - var(--border-size));
                        color: var(--foreground);
                    }


                </style>
                <button>
                    <div>
                        A beautiful button
                    </div>
                </button>
                <?php
                /*				break;
                            case'47';
                                */ ?>


                <?php
                /*				break;
                            case'48';
                                */ ?>


                <?php
                /*				break;
                            case'49';
                                */ ?>


                <?php
                /*				break;
                            case'50';
                                */ ?>


                <?php
                /*				break;
                            case'51';
                                */ ?>


                <?php
                /*				break;
                            case'52';
                                */ ?>


                <?php
                /*				break;
                            case'53';
                                */ ?>


                <?php
                /*				break;
                            case'54';
                                */ ?>


                <?php
                /*				break;
                            case'55';
                                */ ?>


                <?php
                /*				break;
                            case'56';
                                */ ?>


                <?php
                /*				break;
                            case'57';
                                */ ?>


                <?php
                /*				break;
                            case'58';
                                */ ?>


                <?php
                /*				break;
                            case'59';
                                */ ?>


                <?php
                /*				break;
                            case'60';
                                */ ?>


                <?php
                /*				break;
                            case'61';
                                */ ?>


                <?php
                /*				break;
                            case'62';
                                */ ?>


                <?php
                /*				break;
                            case'63';
                                */ ?>


                <?php
                /*				break;
                            case'64';
                                */ ?>


                <?php
                /*				break;
                            case'65';
                                */ ?>


                <?php
                /*				break;
                            case'66';
                                */ ?>


                <?php
                /*				break;
                            case'67';
                                */ ?>

                <?php
                /*				break;
                            case'68';
                                */ ?>

                <?php
                /*				break;
                            case'69';
                                */ ?>


                <?php
                /*				break;
                            case'70';
                                */ ?>


                <?php
                /*				break;
                            case'71';
                                */ ?>


                <?php
                /*				break;
                            case'72';
                                */ ?>


                <?php
                /*				break;
                            case'73';
                                */ ?>


                <?php
                /*				break;
                            case'74';
                                */ ?>


                <?php
                /*				break;
                            case'75';
                                */ ?>

                <?php
                /*				break;
                            case'76';
                                */ ?>

                <?php
                /*				break;
                            case'77';
                                */ ?>


                <?php
                /*				break;
                            case'78';
                                */ ?>


                <?php
                /*				break;
                            case'79';
                                */ ?>


                <?php
                /*				break;
                            case'80';
                                */ ?>


                <?php
                /*				break;
                            case'81';
                                */ ?>


                <?php
                /*				break;
                            case'82';
                                */ ?>


                <?php
                /*				break;
                            case'83';
                                */ ?>


                <?php
                /*				break;
                            case'84';
                                */ ?>


                <?php
                /*				break;
                            case'85';
                                */ ?>


                <?php
                /*				break;
                            case'86';
                                */ ?>


                <?php
                /*				break;
                            case'87';
                                */ ?>


                <?php
                /*				break;
                            case'88';
                                */ ?>


                <?php
                /*				break;
                            case'89';
                                */ ?>


                <?php
                /*				break;
                            case'90';
                                */ ?>


                <?php
                /*				break;
                            case'91';
                                */ ?>


                <?php
                /*				break;
                            case'92';
                                */ ?>

                <?php
                /*				break;
                            case'93';
                                */ ?>


                <?php
                /*				break;
                            case'94';
                                */ ?>


                <?php
                /*				break;
                            case'95';
                                */ ?>


                <?php
                /*				break;
                            case'96';
                                */ ?>


                <?php
                /*				break;
                            case'97';
                                */ ?>


                <?php
                /*				break;
                            case'98';
                                */ ?>


                <?php
                /*				break;
                            case'99';
                                */ ?>


                <?php
                /*				break;
                            case'100';
                                */ ?>


            <?php
            /*				break;*/

        endswitch;
    }
}


