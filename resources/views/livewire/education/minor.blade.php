@section('pageTitle', $currentPageSub)

<div>
    <x-modules.title-subtitle>
        {{ $currentPageTitle }}
        <x-slot:sub> {{ $currentPageSub }} </x-slot:sub>
        <x-slot:date> 2016 - 2021</x-slot:date>
    </x-modules.title-subtitle>

    <p class="content-main-group">
        Discover the intersection of business strategy and technological innovation within my Business Administration column.
        Explore how my insights from this minor complement my technical expertise,
        showcasing how I merge business acumen with technology to create impactful solutions in the digital landscape.
    </p>
    <!-- Start -->
    <x-modules.description-list-main-outer>
        <!-- First Box -->
        <x-modules.description-list-main-inner>
            <x-slot:title> Experience </x-slot:title>
            <!-- List -->
            <x-modules.description-list-item>
                Gained a comprehensive understanding of business operations and management principles, focusing on planning, organizing, leading, and controlling within diverse business settings
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Explored multifaceted marketing concepts such as segmentation, targeting, positioning, branding, and promotion to comprehend their strategic implications in business contexts
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Studied foundational principles and practices of accounting, including the analysis of financial statements, balance sheets, income statements, and cash flow statements
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Delved into the basics of finance, encompassing the time value of money, financial analysis techniques, and risk management strategies
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Explored operational frameworks focusing on optimizing business processes, streamlining workflows, and enhancing operational efficiency
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Investigated strategic management principles, including competitive analysis, strategic planning, and implementation, fostering a deeper understanding of long-term business planning
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Examined organizational behavior theories and practices, gaining insights into employee motivation, leadership styles, and team dynamics within workplace environments
            </x-modules.description-list-item>
        </x-modules.description-list-main-inner>
        <!-- Second Box -->
        <x-modules.description-list-main-inner>
            <x-slot:title> Takeaways </x-slot:title>
            <!-- List -->
            <x-modules.description-list-item>
                Proficiency in budget creation, investment assessment, and analysis of financial risks, contributing to effective financial management skills
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Designed and executed targeted marketing strategies aimed at specific customer segments, fostering an understanding of customer-centric approaches
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Developed adept management skills for overseeing people and resources, crucial for achieving organizational objectives efficiently
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Acquired the ability to analyze financial statements and utilize financial ratios to evaluate a company's performance, aiding in informed decision-making and strategic planning
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Strategic decision-making abilities fostered by understanding competitive analysis and strategic planning, enabling effective long-term planning and implementation
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Enhanced skills in managing organizational behavior, facilitating effective team leadership, and fostering a productive work environment
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Proficiency in optimizing business processes, streamlining workflows, and enhancing operational efficiency through operational frameworks
            </x-modules.description-list-item>
        </x-modules.description-list-main-inner>
    </x-modules.description-list-main-outer>
    <!-- End -->
</div>
