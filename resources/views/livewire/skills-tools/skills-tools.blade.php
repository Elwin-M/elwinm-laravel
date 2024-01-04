@section('pageTitle', 'Skills And Tools')

<div>
    <x-modules.title-subtitle>
        {{ $currentPageTitle }}
        <x-slot:sub> {{ $currentPageSub }} </x-slot:sub>
    </x-modules.title-subtitle>
    <p class="content-main-group">
        These are the list skills and tools I actively use during my developement. CHANGEME
    </p>
    {{-- <p class="content-main-large">
        This is a list of all the tools I use
    </p> --}}
    {{-- TestTitle --}}
    {{-- <pre>
        <code class="language-css">

           ::placeholder {
               color: var(--placeholder);
               opacity: 1;
           }

        </code>
     </pre> --}}
    {{-- <x-modules.callout-box>
        <x-slot:description>
            <pre class="">
                <code class="language-json">
            {
                "Data Analysis": [
                    "Business Intelligence",
                    "Data Collection",
                    "Data Visualization",
                    "Data Warehousing",
                    "Excel",
                    "Machine Learning",
                    "Matlab",
                    "Python",
                    "Statistical Analysis"
                ],
                "Database Management": [
                    "Relational and Non-Relational DB Design",
                    "Database Design",
                    "Database Administration",
                    "Microsoft Access",
                    "MySQL",
                    "Oracle DBMS",
                    "phpMyAdmin",
                    "PostgreSQL",
                    "SQL"
                ],
                "Networking": [
                    "CDN Management",
                    "DHCP Management",
                    "DNS Management",
                    "Firewall Management",
                    "IPv4/IPv6 Management",
                    "Network Security",
                    "Reverse Proxy Management",
                    "Router And Switch Management",
                    "SSL Configuration And Renewal",
                    "Samba/ Network Shares",
                    "VPN Management",
                    "Virtual Hosts Management"
                ],
                "Project Management": [
                    "Agile Development",
                    "Project Planning",
                    "Project Management Methodologies",
                    "Risk Management"
                ],
                "Public API's": [
                    "Cloudflare",
                    "Google",
                    "OpenAI",
                    "PubMed",
                    "Riot Games",
                    "Spotify",
                    "Twitter"
                ],
                "Software Development": [
                    "Bash Scripting",
                    "C#",
                    "GO (Golang)",
                    "HTML/CSS",
                    "Java",
                    "JavaScript",
                    "Node.js",
                    "PHP",
                    "PowerShell Scripting",
                    "Python",
                    "React"
                ],
                "Web Development": [
                    "Back-End Development",
                    "Front-End Development",
                    "Responsive Web Design",
                    "User Experience Design",
                    "User Interface Design",
                    "Web Application Development",
                    "Web Design",
                    "Web Development Frameworks"
                ],
                "Other": [
                    "Ability To Adapt To New Technologies And Trends",
                    "Backup Management",
                    "CRON Management",
                    "Group Policy Management",
                    "JSON",
                    "Linux CLI",
                    "Linux Services Management",
                    "Regex",
                    "Remote Systems Management",
                    "Strong Verbal And Written Communication Skills",
                    "Systems Designs And Architecture",
                    "Troubleshooting Skills",
                    "UML",
                    "Web Server Management",
                    "Webscraping",
                    "Windows PowerShell/CMD",
                    "XML"
                ]
            }
                </code>
            </pre>
        </x-slot:description>
    </x-modules.callout-box> --}}
    <h2 class="pb-4 text-2xl tracking-tight text-white font-display">
        Skills
    </h2>
    <x-modules.action-box-main>
        <x-modules.action-box-item>
            Data Analysis
            <x-slot:description>
                Business Intelligence </br>
                Data Collection </br>
                Data Visualization </br>
                Data Warehousing </br>
                Excel </br>
                Machine Learning </br>
                Matlab </br>
                Python </br>
                Statistical Analysis </br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Database Management
            <x-slot:description>
                Relational and Non-Relational DB Design </br>
                Database Design </br>
                Database Administration </br>
                MariaDB </br>
                Microsoft Access </br>
                MySQL </br>
                Oracle DBMS </br>
                phpMyAdmin </br>
                PostgreSQL </br>
                SQL </br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Networking
            <x-slot:description>
                CDN Management </br>
                DHCP Management </br>
                DNS Management </br>
                Firewall Management </br>
                IPv4/IPv6 Management </br>
                Network Security </br>
                Reverse Proxy Management </br>
                Router And Switch Management </br>
                SSL Configuration And Renewal </br>
                Samba/ Network Shares </br>
                VPN Management </br>
                Virtual Hosts Management </br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Project Management
            <x-slot:description>
                Agile Development </br>
                Project Planning </br>
                Project Management Methodologies </br>
                Risk Management </br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Public API's
            <x-slot:description>
                Cloudflare </br>
                Google </br>
                OpenAI </br>
                PubMed </br>
                Riot Games </br>
                Spotify </br>
                Twitter </br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Software Developement
            <x-slot:description>
                Bash Scripting </br>
                C# </br>
                GO (Golang) </br>
                HTML/CSS </br>
                Java </br>
                JavaScript </br>
                Node.js </br>
                PHP </br>
                PowerShell Scripting </br>
                Python </br>
                React </br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Web Developement
            <x-slot:description>
                Back-End Development </br>
                Front-End Development </br>
                Responsive Web Design </br>
                User Experience Design </br>
                User Interface Design </br>
                Web Application Development </br>
                Web Design </br>
                Web Development Frameworks </br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Other
            <x-slot:description>
                Ability To Adapt To New Technologies And Trends </br>
                Backup Management </br>
                CRON Management </br>
                Group Policy Management </br>
                JSON </br>
                Linux CLI </br>
                Linux Services Management </br>
                Regex </br>
                Remote Systems Management </br>
                Strong Verbal And Written Communication Skills </br>
                Systems Designs And Architecture </br>
                Troubleshooting Skills </br>
                UML </br>
                Web Server Management </br>
                Webscraping </br>
                Windows PowerShell/CMD </br>
                XML </br>
            </x-slot:description>
        </x-modules.action-box-item>
    </x-modules.action-box-main>
    <!-- Division -->
    <x-modules.bar-horizontal />
    <h2 class="pb-4 text-2xl tracking-tight text-white font-display">
        Tools
    </h2>
    <x-modules.action-box-main>
        <x-modules.action-box-item>
            IDE's
            <x-slot:description>
                Eclipse </br>
                JupyterLab </br>
                NetBeans </br>
                VS Code </br>
                Visual Studio </br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Productivity Tools
            <x-slot:description>
                Adobe Suite </br>
                Google Workspace </br>
                Microsoft Automate </br>
                Microsoft Office </br>
                Microsoft SharePoint </br>
                NPM (Node Package Manager) </br>
                WordPress </br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Operating Systems
            <x-slot:description>
                Android OS </br>
                Linux </br>
                MacOS </br>
                Windows </br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Version Control
            <x-slot:description>
                Git </br>
                GitHub </br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Virtual Machines
            <x-slot:description>
                Docker </br>
                Kubernetes </br>
                Oracle VirtualBox </br>
                Windows Sandbox </br>
                Windows Subsystem For Linux </br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Other
            <x-slot:description>
                Adobe Suite </br>
                Apache </br>
                Apache Tomcat </br>
                Autodesk Fusion 360 </br>
                Blender </br>
                Nginx </br>
                OTRS Ticketing System </br>
                PuTTY </br>
                Unity </br>
                Wireshark </br>
            </x-slot:description>
        </x-modules.action-box-item>
    </x-modules.action-box-main>
</div>
