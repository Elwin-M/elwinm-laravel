{{-- <div
    class="hidden xl:sticky xl:top-[4.5rem] xl:-mr-6 xl:block xl:h-[calc(100vh-4.5rem)] xl:flex-none xl:overflow-y-auto xl:py-16 xl:pr-6">
    <div aria-labelledby="on-this-page-title" class="w-56">
        <h2 id="on-this-page-title" class="text-sm font-medium font-display text-slate-900 dark:text-white">
            On this page
        </h2>
        <div class="mt-4 space-y-3 text-sm">
            <!-- Sample section -->
            <div>
                <h3>
                    <a href="#section-id" class="hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-300">
                        Section Title
                    </a>
                </h3>
                <div class="pl-5 mt-2 space-y-3 text-slate-500 dark:text-slate-400">
                    <!-- Sample subsection -->
                    <div>
                        <a href="#subsection-id" class="hover:text-slate-600 dark:hover:text-slate-300">
                            Subsection Title
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div x-data="{
    tableOfContents: [],
    currentSection: '',
    getHeadings() {
      let headings = [];
      document.querySelectorAll('h2, h3').forEach((el) => {
        headings.push({ id: el.id, top: el.getBoundingClientRect().top });
      });
      return headings;
    },
    updateCurrentSection() {
      let headings = this.getHeadings();
      let top = window.scrollY;
      let current = '';
      for (let heading of headings) {
        if (top >= heading.top) {
          current = heading.id;
        }
      }
      this.currentSection = current;
    },
    scrollToSection(id) {
      let el = document.getElementById(id);
      if (el) {
        el.scrollIntoView({ behavior: 'smooth' });
      }
    },
    init() {
      this.tableOfContents = this.getHeadings();
      this.updateCurrentSection();
      window.addEventListener('scroll', () => {
        this.updateCurrentSection();
      });
    },
  }" x-init="init()">
<div class="hidden xl:sticky xl:top-16 xl:mr-6 xl:block xl:h-screen xl:flex-none xl:overflow-y-auto xl:py-16 xl:pr-6">
  <nav aria-labelledby="on-this-page-title" class="w-56">
    <h2 id="on-this-page-title" class="text-sm font-medium font-display text-slate-900 dark:text-white">
      On this page
    </h2>
    <ol role="list" class="mt-4 space-y-3 text-sm">
      <template x-for="(section, index) in tableOfContents" :key="index">
        <li x-text="section.id">
          <a :href="`#${section.id}`"
            :class="{ 'text-sky-500': currentSection === section.id, 'font-normal text-slate-500 hover:text-slate-700': currentSection !== section.id }"
            x-on:click.prevent="scrollToSection(section.id)"
          >
            <span x-text="section.title"></span>
          </a>
        </li>
      </template>
    </ol>
  </nav>
</div>
</div>
