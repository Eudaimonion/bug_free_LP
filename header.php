<header class="bg-blue text-white relative">
  <div class="absolute top-0 left-0 right-0 bottom-0 overflow-hidden">
    <img class="absolute top-24 left-50 transform -translate-y-50" src="<?= get_template_directory_uri() . '/assets/images/atlas.svg' ?>" alt="Atlas" />
  </div>
  <div class="max-w-6xl mx-auto relative z-10">
    <div class="py-8 px-4">
      <h1 class="mt-0 mb-8">
        <a style="width:287px" class="block">
          <img src="<?= get_template_directory_uri() . '/assets/images/logo.png' ?>" srcset="<?= get_template_directory_uri() . '/assets/images/logo@2x.png' ?>" alt="Geo Coaching"/>
        </a>
      </h1>
      <div class="flex flex-col md:flex-row -mx-4">
        <div class="px-4 lg:pr-40 flex-1">
          <div class="grid gap-4">
            <div class="grid gap-2">
              <div class="flex">
                <?php for($i = 0; $i < 5; $i++) { ?>
                  <?php get_template_part('template-parts/star-rating') ?>
                <?php } ?>
              </div>
              <p>
                “Our work together has enabled me to be a more effective executive leader, creating a more proactive and flexible organization with (...) the best teams (...).” N.A.G., General Director of an organisation in the energy industry.
              </p>
            </div>
            <h1 class="text-5xl font-bold">
              Create your vision. Get it across. Get it done.
            </h1>
            <ul class="list-disc list-inside">
              <li>Bring your vision into consciousness.</li>
              <li>Develop your leadership.</li>
              <li>Forge it into a global culture.</li>
            </ul>
          </div>
        </div>
        <div class="w-full mt-4 md:mt-0 md:max-w-sm">
          <div class="px-4">
            <div class="relative">
              <div class="grid gap-4 md:absolute top-0 left-0 right-0">
                <div class="w-full">
                  <div class="text-text bg-white rounded-xl shadow-lg p-4 relative">
                    <div class="hidden lg:block absolute -top-8 -left-32 w-28">
                      <img src="<?= get_template_directory_uri() . '/assets/images/arrow.svg' ?>" alt="Arrow"/>
                      <p class="text-white">Get access to key insights from the field</p>
                    </div>
                    <h3 class="text-2xl mb-4">SIGN UP TO OUR NEWSLETTER AND BENEFIT FROM OUR KEY INSIGHTS AND <strong>COMPLIMENTARY WEBINARS</strong></h3>
                    <?= do_shortcode('[contactSellsy id=1]') ?>
                    <p class="text-center text-border">No spam, just free value in your inbox</p>
                  </div>
                </div>
                <div class="w-full">
                  <div class="grid">
                    <div class="flex mb-2 text-white md:text-blue justify-center">
                      <?php for($i = 0; $i < 5; $i++) { ?>
                        <?php get_template_part('template-parts/star-rating') ?>
                      <?php } ?>
                    </div>
                    <p class="text-center text-white md:text-text mb-2">
                      "Since I started the business, automatically taking the reins of leadership in a CEO role, I worked so hard to become a CEO. I was chasing the idea of what a CEO should be like. Later, with some help, I realized that I did not need to become a CEO: In fact, the CEO was me. This was a simple, yet defining idea in my leadership. This realization was during my coaching program with GEO Coaching."
                    </p>
                    <p class="text-center text-white md:text-text">
                      <strong>W.A.N., Startup Founder in the Finance industry</strong>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
