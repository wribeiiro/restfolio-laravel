<?php

namespace App\Services;

class ProfileService
{
    public function about(): array
    {
        return ["Hi Devs 🖖! I'm Wellisson Ribeiro. I'm 26 years old, married, and father of two little girls.
        Graduated in Analysis and Systems Development at UNOPAR.
        Developer with some years of experience developing applications with different technologies,
        but with a focus on PHP (Code Igniter v3/v4, Laravel, Lumen and VueJS Frameworks).
        I am currently work a software engineer at SoftExpert.
        All packages are up to date"];
    }

    public function education(): array
    {
        return [
            "Graduated in Systems Analysis and Development At UNOPAR - University North of Paraná - 2015-2018",
            "Information systems (Studied for 1 year) At UNC - Contestado University - 2014",
        ];
    }

    public function experience(): array
    {
        return [
            "Trainee at Town Hall Municipal Mafra-SC 2012-2013 - Posting and receiving correspondence, responsible for copy services, and general internal services",
            "Trainee at Social Security 2013-2014 - Document management, organization and maintenance of the archive dead. Digitalization, control, maintenance and distribution of Law Suit.",
            "Analist of Support at Support Informática 2014-2016 - Responsible for customer service, via phone and location. System training. Assembly and maintenance of computers.",
            "Full Stack Developer at Support Informática 2016-2018 - Maintenance and development of websites and systems, using technologies ​​such as PHP, JavaScript, HTML + CSS and MySQL, Delphi, Visual Basic 6 e MSAccess.",
            "Freelancer Full Stack Developer at Canvas Studio 2016-2019 - Maintenance and development of responsive web systems, using technologies such as PHP, JavaScript, HTML + CSS, MySQL, Angular and Frameworks such as Code Igniter 3 and Bootstrap 3.",
            "Full Stack Developer at ADM Informática 2018-2021 - Development and maintenance of desktop systems using technologies such as Visual Basic 5, C #, Java, VB.net, and Access and MySQL databases. Development and maintenance of web applications and apps, using technologies such as PHP (Code Igniter), JavaScript, Angular (Ionic 3), HTML + CSS and MySQL database.",
            "Software Engineer at SoftExpert 2021 until now - Development and maintenance of systems.",

        ];
    }

    public function skills(): array
    {
        return [
            'techs' => ['PHP', 'Laravel', 'Lumen', 'Code Igniter', 'Javascript', 'C#', 'Visual Basic', 'HTML', 'CSS', 'jQuery', 'React', 'Vue.JS', 'Bootstrap', 'Bootstrap', 'Ionic', 'SQL,', 'MySQL', 'PostgreSQL'],
            'tools' => ['Docker', 'Github', 'Github Actions', 'Jira', 'VS Code', 'PHPStorm']
        ];
    }

    public function works(): array
    {
        return [];
    }

    public function contact(): array
    {
        return [
            'email' => 'welleh10@gmail.com',
            'linkedin' => 'https://www.linkedin.com/in/wellisson-ribeiro/',
            'github' => 'https://github.com/wribeiiro'
        ];
    }
}