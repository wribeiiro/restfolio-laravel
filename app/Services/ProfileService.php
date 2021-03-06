<?php

namespace App\Services;

class ProfileService
{
    /**
     * @return array
     */
    public function about(): array
    {
        return [
            "description" => "Hi Devs π! I'm Wellisson Ribeiro. Brazilian π§π·, I'm 26 years old, christian, married, and father of two little girls. Graduated in Analysis and Systems Development at UNOPAR π. I've been working as Developer since 2016 with different technologies, but with a focus on Back-end with PHP (Laravel, Lumen and Code Igniter Frameworks). I'm currently work as a software engineer at SoftExpert, studying some things like English πΊπΈ and PHP ~ Laravel π, also reading some books ( Design Patterns, Refactoring ) π."
        ];
    }

    /**
     * @return array
     */
    public function education(): array
    {
        return [
            "institution" => [
                "Information systems (Studied for 1 year) At UNC - Contestado University - 2014",
                "Graduated in Systems Analysis and Development At UNOPAR - University North of ParanΓ‘ - 2015-2018"
            ],
        ];
    }

    /**
     * @return array
     */
    public function experience(): array
    {
        return [
            [
                "company" => "SoftExpert",
                "details" => [
                    "occupation" => "Software Engineer",
                    "date" => "2021 until now",
                    "responsibilities" => "Development and maintenance of the System in both the backend and the frontend, focusing on solutions for excellence in Management and Business Compliance.
                    Analysis and implementation of new components and functionalities within the system, always aiming at their quality and performance. M
                    ain technologies and tools used on a daily basis: PHP, PHPUnit, Doctrine, Rest, Javascript, React, PostgreSQL, Oracle, SQLServer, Docker, Git, Jira, Gitlab and Scrum for project management and planning."
                ]
            ],
            [
                "company" => "ADM InformΓ‘tica",
                "details" => [
                    "occupation" => "Full Stack Developer",
                    "date" => "2018-2021",
                    "responsibilities" => "Development and maintenance of applications, websites and web and desktop systems.
                    Company that offers systems for NF-e, NFC-e, CT-e, MDF-e, PAF-Ecf, among others upon request.
                    Integration with own and third-party API's.
                    Main technologies used:
                    PHP, Visual Basic 5, C#, Java, HTML and CSS, JavaScript, Access, MySQL;
                    Frameworks: Code Igniter v3/v4, Laravel and Lumen, Bootstrap, Ionic 3;",
                ]
            ],
            [
                "company" => "Support InformΓ‘tica",
                "details" => [
                    [
                        "occupation" => "Full Stack Developer",
                        "date" => "2016-2018",
                        "responsibilities" => "Development and maintenance of websites and web and desktop systems, using desktop technologies such as Visual Basic 6, Delphi, MySQL database and MsAccess. And web technologies like PHP, HTML, CSS and JavaScript (Jquery)."
                    ],
                    [
                        "occupation" => "Analyst of Support",
                        "date" => "2014-2016",
                        "responsibilities" => "Responsible for customer service, via phone and location. System training. Assembly and maintenance of computers."
                    ]
                ],
            ],
            [
                "company" => "Canvas Studio",
                "details" => [
                    "occupation" => "Freelancer Full Stack Developer",
                    "date" => "2016-2019",
                    "responsibilities" => "Maintenance and development of responsive websites and web systems, having as main technologies used, PHP - Code Igniter 3, JavaScript, HTML, CSS - Bootstrap and MySQL database."
                ]
            ],
            [
                "company" => "INSS",
                "details" => [
                    "occupation" => "Trainee",
                    "date" => "2013-2014",
                    "responsibilities" => "Document management, organization and maintenance of the archive dead. Digitalization, control, maintenance and distribution of Law Suit."
                ]
            ],
            [
                "company" => "Prefeitura Municipal Mafra-SC",
                "details" => [
                    "occupation" => "Trainee",
                    "date" => "2012-2013",
                    "responsibilities" => "Posting and receiving correspondence, responsible for copy services, and general internal services."
                ]
            ]
        ];
    }

    /**
     * @return array
     */
    public function skills(): array
    {
        return [
            'technologies' => ['PHP', 'Laravel', 'Lumen', 'Code Igniter', 'Javascript', 'C#', 'Visual Basic', 'HTML', 'CSS', 'jQuery', 'React', 'Vue.JS', 'Bootstrap', 'Bootstrap', 'Ionic', 'SQL,', 'MySQL', 'PostgreSQL'],
            'tools' => ['Docker', 'Github', 'Github Actions', 'Jira', 'VS Code', 'PHPStorm']
        ];
    }

    /**
     * @return array
     */
    public function works(): array
    {
        return [
            [
                "description" => "React Weather",
                "link" => "https://react-weather-alpha.vercel.app/"
            ],
            [
                "description" => "Amazon Prime Video Clone",
                "link" => "https://amazon-prime-video-clone.vercel.app/"
            ],
            [
                "description" => "Danfe Generator",
                "link" => "https://wribeiiro.com/danfe-generator/"
            ],
            [
                "description" => "Clone Whatsapp Chat",
                "link" => "https://wribeiiro.com/clone-whatsapp/"
            ],
            [
                "description" => "React Spotify Player",
                "link" => "https://react-spotify-rho.vercel.app/"
            ],
            [
                "description" => "React Evil",
                "link" => "https://react-evil.vercel.app/"
            ],
            [
                "description" => "Whatsapp Widget",
                "link" => "https://www.wribeiiro.com/whatsapp-widget/"
            ],
            [
                "description" => "Vue Github",
                "link" => "https://www.wribeiiro.com/vue-github"
            ],
            [
                "description" => "https://github.com/wribeiiro/image-to-pdf-conversor",
                "link" => "Image 2 PDF Conversor"
            ],
            [
                "description" => "Spotify Widget",
                "link" => "https://github.com/wribeiiro/spotify-widget"
            ],
            [
                "description" => "Devs of Tomorrow",
                "link" => "https://www.wribeiiro.com/laravel-github/"
            ],
        ];
    }

    /**
     * @return array
     */
    public function contact(): array
    {
        return [
            'email' => 'welleh10@gmail.com',
            'linkedin' => 'https://www.linkedin.com/in/wellisson-ribeiro/',
            'github' => 'https://github.com/wribeiiro'
        ];
    }
}
