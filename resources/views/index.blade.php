<x-layouts.app>
    <!-- Livewire component that displays page -->
    <livewire:content-display />
    <pre>
        <code class="!language-css">

           ::placeholder {
               color: var(--placeholder);
               opacity: 1;
           }

        </code>
     </pre>
</x-layouts.app>
<script>
    // document.addEventListener('livewire:init', () => {
       Livewire.on('content-updated', (event) => {
        Prism.highlightAll();
        console.log("hejrer3ewrfghgfhf");
       });

        // window.livewire.on('content-updated', () => {
        //     Prism.highlightAll();
        //     console.log("hejrer3ewrfghgfhf");
        // });
    // });
</script>
