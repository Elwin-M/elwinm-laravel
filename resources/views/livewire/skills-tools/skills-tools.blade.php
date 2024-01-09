@section('pageTitle', 'Skills And Tools')

<div>
    <x-modules.title-subtitle>
        {{ $currentPageTitle }}
        <x-slot:sub> {{ $currentPageSub }} </x-slot:sub>
    </x-modules.title-subtitle>
    <p class="content-main-group">
        These are the list of skills and tools I actively use during my developement and administrative duties.
    </p>

    <h2 class="pb-4 text-2xl tracking-tight text-white font-display">
        Skills
    </h2>
    <x-modules.action-box-main>
        <x-modules.action-box-item>
            Data Analysis
            <x-slot:description>
                Business Intelligence <br>
                Data Collection <br>
                Data Visualization <br>
                Data Warehousing <br>
                Excel <br>
                Machine Learning <br>
                Matlab <br>
                Python <br>
                Statistical Analysis <br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Database Management
            <x-slot:description>
                Relational and Non-Relational DB Design <br>
                Database Design <br>
                Database Administration <br>
                MariaDB <br>
                Microsoft Access <br>
                MySQL <br>
                Oracle DBMS <br>
                phpMyAdmin <br>
                PostgreSQL <br>
                SQL <br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Networking
            <x-slot:description>
                CDN Management <br>
                DHCP Management <br>
                DNS Management <br>
                Firewall Management <br>
                IPv4/IPv6 Management <br>
                Network Security <br>
                Reverse Proxy Management <br>
                Router And Switch Management <br>
                SSL Configuration And Renewal <br>
                Samba/ Network Shares <br>
                VPN Management <br>
                Virtual Hosts Management <br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Project Management
            <x-slot:description>
                Agile Development <br>
                Project Planning <br>
                Project Management Methodologies <br>
                Risk Management <br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Public API's
            <x-slot:description>
                Cloudflare <br>
                Google <br>
                OpenAI <br>
                PubMed <br>
                Riot Games <br>
                Spotify <br>
                Twitter <br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Software Developement
            <x-slot:description>
                Bash Scripting <br>
                C# <br>
                GO (Golang) <br>
                HTML/CSS <br>
                Java <br>
                JavaScript <br>
                Node.js <br>
                PHP <br>
                PowerShell Scripting <br>
                Python <br>
                React <br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Web Developement
            <x-slot:description>
                Back-End Development <br>
                Front-End Development <br>
                Laravel 10 <br>
                Livewire 3 <br>
                Responsive Web Design <br>
                User Experience Design <br>
                User Interface Design <br>
                Web Application Development <br>
                Web Design <br>
                Web Development Frameworks <br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Other
            <x-slot:description>
                Backup Management <br>
                CRON Management <br>
                Group Policy Management <br>
                JSON <br>
                Linux CLI <br>
                Linux Services Management <br>
                Regex <br>
                Remote Systems Management <br>
                Systems Designs And Architecture <br>
                Troubleshooting Skills <br>
                UML <br>
                Web Server Management <br>
                Webscraping <br>
                Windows PowerShell/CMD <br>
                XML <br>
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
                Eclipse <br>
                JupyterLab <br>
                NetBeans <br>
                VS Code <br>
                Visual Studio <br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Productivity Tools
            <x-slot:description>
                Adobe Suite <br>
                Google Workspace <br>
                Microsoft Automate <br>
                Microsoft Office <br>
                Microsoft SharePoint <br>
                NPM (Node Package Manager) <br>
                WordPress <br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Operating Systems
            <x-slot:description>
                Android OS <br>
                Linux <br>
                MacOS <br>
                Windows <br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Version Control
            <x-slot:description>
                Git <br>
                GitHub <br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Virtual Machines
            <x-slot:description>
                Docker <br>
                Kubernetes <br>
                Oracle VirtualBox <br>
                Windows Sandbox <br>
                Windows Subsystem For Linux <br>
            </x-slot:description>
        </x-modules.action-box-item>
        <x-modules.action-box-item>
            Other
            <x-slot:description>
                Adobe Suite <br>
                Apache <br>
                Apache Tomcat <br>
                Autodesk Fusion 360 <br>
                Blender <br>
                Nginx <br>
                OTRS Ticketing System <br>
                PuTTY <br>
                Unity <br>
                Wireshark <br>
            </x-slot:description>
        </x-modules.action-box-item>
    </x-modules.action-box-main>
</div>
