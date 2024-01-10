@section('pageTitle', $currentPageSub)

<div>
    <x-modules.title-subtitle>
        {{ $currentPageTitle }}
        <x-slot:sub> {{ $currentPageSub }} </x-slot:sub>
        <x-slot:date> 2016 - 2021</x-slot:date>
    </x-modules.title-subtitle>

    <p class="content-main-group">
        Embark on my Information Technology journey, where technical prowess meets innovation.
        Explore my experiences and key takeaways in the world of IT,
        showcasing how I leverage cutting-edge technology to solve complex challenges and drive digital transformation.
    </p>
    <!-- Start -->
    <x-modules.description-list-main-outer>
        <!-- First Box -->
        <x-modules.description-list-main-inner>
            <x-slot:title> Experience </x-slot:title>
            <!-- List -->
            <x-modules.description-list-item>
                Mastered diverse skills in database design, web development, networking, and security domains, contributing to a comprehensive understanding of IT fundamentals
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Showcased adeptness in web server management, troubleshooting, and proficient utilization of version control tools like Git and GitHub
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Cultivated a robust foundation in programming, software development principles, and techniques, alongside honing knowledge management practices encompassing acquisition, storage, retrieval, and dissemination of information
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Enhanced communication proficiency through technical writing and presentation skills, facilitating effective conveyance of complex technical information
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Delved into the dynamic impact of information technology on organizational behavior, unraveling its effects on culture, structure, and strategy. Also, gained exposure to project management methodologies, team collaboration tools, and the design and development of enterprise systems such as ERP, SCM, CRM, and BI
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Explored the nuances of project management throughout the project lifecycle—from initiation to closure—while also delving into human-computer interaction principles, including user interface design, usability testing, accessibility, and user experience (UX) design
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Engaged in the study of information technology security principles and practices, encompassing threat analysis, risk management, access control, cryptography, security policies, and security audits
            </x-modules.description-list-item>
        </x-modules.description-list-main-inner>
        <!-- Second Box -->
        <x-modules.description-list-main-inner>
            <x-slot:title> Takeaways </x-slot:title>
            <!-- List -->
            <x-modules.description-list-item>
                Cultivated effective communication skills, proficient in articulating technical concepts to both technical and non-technical audiences
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Proficiency in database design and management, empowering the creation and implementation of intricate database systems
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Expertise in enterprise systems design and development, adept at analyzing business processes and implementing systems for organizational enhancement
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Mastery in programming languages such as Java, Python, PHP, and HTML/CSS, contributing to a versatile skill set
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Profound knowledge management skills applied in designing and implementing effective knowledge management systems
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Acquired comprehensive knowledge of database management systems like Oracle DBMS and Microsoft Access, along with familiarity with various operating systems including Linux, Windows, and MacOS
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Sharpened problem-solving and critical thinking skills, instrumental in analyzing intricate problems and devising effective solutions
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Proficient project management skills, overseeing projects from initiation to closure while effectively managing project teams
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Proficiency in data analysis utilizing tools such as Excel, MATLAB, and Python, along with competence in various software tools like the Microsoft Suite and Wireshark
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Sound understanding of systems design and architecture, complemented by proficiency in UML diagramming and software tools application
            </x-modules.description-list-item>
        </x-modules.description-list-main-inner>
    </x-modules.description-list-main-outer>
    <!-- End -->
</div>
