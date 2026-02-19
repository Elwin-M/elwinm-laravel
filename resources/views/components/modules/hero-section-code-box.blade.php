<!-- Main code box -->
<div class="relative rounded-2xl bg-[#0A101F]/80 ring-1 ring-white/10 backdrop-blur">
    <div class="absolute h-px -top-px left-20 right-11 bg-gradient-to-r from-sky-300/0 via-sky-300/70 to-sky-300/0">
    </div>
    <div class="absolute h-px -bottom-px left-11 right-20 bg-gradient-to-r from-blue-400/0 via-blue-400 to-blue-400/0">
    </div>
    <div class="pt-4 pl-4" x-data="{ visibleId: 1 }" x-cloak>
        <!-- TrafficLightsIcon component SVG here -->
        <svg aria-hidden="true" viewBox="0 0 42 10" fill="none" class="h-2.5 w-auto stroke-slate-500/30">
            <circle cx="5" cy="5" r="4.5" />
            <circle cx="21" cy="5" r="4.5" />
            <circle cx="37" cy="5" r="4.5" />
        </svg>
        <!-- Tabs here -->
        <div class="flex mt-4 space-x-2 text-xs">
            <!-- Tab 1 -->
            <div x-on:click=" visibleId = 1" class="flex h-6 rounded-full"
                :class="{ 'p-px font-medium bg-gradient-to-r from-sky-400/30 via-sky-400 to-sky-400/30': visibleId === 1 }">
                <div class="flex items-center px-2.5 rounded-full"
                    :class="visibleId === 1 ? ' bg-slate-800 text-sky-300' :
                        'text-slate-500 cursor-pointer hover:bg-slate-800 hover:text-sky-300'">
                    code-box.blade.php
                </div>
            </div>
            <!-- Tab 2 -->
            <div x-on:click=" visibleId = 2, console.log('Hello, Visitor!')" class="flex h-6 rounded-full"
                :class="{ 'p-px font-medium bg-gradient-to-r from-sky-400/30 via-sky-400 to-sky-400/30': visibleId === 2 }">

                <div class="flex items-center px-2.5 rounded-full"
                    :class="visibleId === 2 ? ' bg-slate-800 text-sky-300' :
                        'text-slate-500 cursor-pointer hover:bg-slate-800 hover:text-sky-300'">
                    greetings.js
                </div>

            </div>
        </div>
        <!-- Code box -->
        <div class="flex items-start px-4 pb-6 mt-6 font-mono text-sm">
            <div class="pr-4 border-r select-none border-slate-300/5 text-slate-600">
                <!-- Line Numbers HTML here -->
                <div>
                    <div>01</div>
                    <div>02</div>
                    <div>03</div>
                    <div>04</div>
                    <div>05</div>
                    <div>06</div>
                    <div>07</div>
                    <div>08</div>
                    <div>09</div>
                    <div x-show="visibleId == 1" class="lg:hidden">10</div>
                </div>
            </div>
            <div class="flex overflow-x-auto whitespace-nowrap">
                <div class="px-4 text-sky-300">
                    <!-- Code content 1 here -->
                    <div x-show="visibleId == 1">
                        <pre>
<code class="language-markup">&lt;!-- Click the greetings.js tab --&gt;
&lt;div @click="greet('Visitor'),
             visibleTab = greetings.js"
      class="tab-base"
     :class="{'tab-selected':
             visibleTab === greetings.js }"&gt;
    greetings.js
&lt;/div&gt;</code>
                        </pre><div class="lg:hidden" style="color:#8292a2;">&lt;!-- My website is best viewed on desktop --&gt;</div>
                    </div>
                    <!-- Code content 2 here -->
                    <div x-show="visibleId == 2">
                        <pre>
<code class="language-javascript">// Check your browser console
const greet = (name) => {
    console.log('Hello, ' + name);
};

const userName = 'Visitor';

// Usage - greet(userName); </code>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
