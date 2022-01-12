<?php

namespace App\Services;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Services\ProfileService;

class ProfileServiceTest extends TestCase
{
    /**
     * @var \App\Services\ProfileService
     */
    private ProfileService $profileService;

    /**
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->profileService = new ProfileService();
    }

    /**
     * @return void
     */
    public function testAboutNotShouldReturnEmpty()
    {
        $aboutContent = $this->profileService->about();
        $this->assertIsArray($aboutContent);
        $this->assertNotEmpty($aboutContent);
        $this->assertArrayHasKey(0, $aboutContent);
    }

    /**
     * @return void
     */
    public function testEducationNotShouldReturnEmpty()
    {
        $educationContent = $this->profileService->education();
        $this->assertIsArray($educationContent);
        $this->assertNotEmpty($educationContent);
        $this->assertArrayHasKey(0, $educationContent);
        $this->assertArrayHasKey(1, $educationContent);
    }

    /**
     * @return void
     */
    public function testExperienceNotShouldReturnEmpty()
    {
        $experienceContent = $this->profileService->experience();
        $this->assertIsArray($experienceContent);
        $this->assertNotEmpty($experienceContent);
        $this->assertArrayHasKey("company", $experienceContent[0]);
        $this->assertArrayHasKey("details", $experienceContent[0]);
    }

    /**
     * @return void
     */
    public function testSkillsNotShouldReturnEmpty()
    {
        $skillsContent = $this->profileService->skills();
        $this->assertIsArray($skillsContent);
        $this->assertNotEmpty($skillsContent);
        $this->assertArrayHasKey("techs", $skillsContent);
        $this->assertArrayHasKey("tools", $skillsContent);
    }

    /**
     * @return void
     */
    public function testWorksNotShouldReturnEmpty()
    {
        $worksContent = $this->profileService->works();
        $this->assertIsArray($worksContent);
        $this->assertNotEmpty($worksContent);
        $this->assertArrayHasKey("description", $worksContent[0]);
        $this->assertArrayHasKey("link", $worksContent[0]);
    }

    /**
     * @return void
     */
    public function testContactNotShouldReturnEmpty()
    {
        $contactContent = $this->profileService->contact();
        $this->assertIsArray($contactContent);
        $this->assertNotEmpty($contactContent);
        $this->assertArrayHasKey("email", $contactContent);
        $this->assertArrayHasKey("linkedin", $contactContent);
        $this->assertArrayHasKey("github", $contactContent);
    }
}
