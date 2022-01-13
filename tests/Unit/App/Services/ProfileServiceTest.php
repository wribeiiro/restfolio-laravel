<?php

namespace App\Services;

use Tests\TestCase;

class ProfileServiceTest extends TestCase
{

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
        $this->assertCount(1, $aboutContent);
        $this->assertArrayHasKey("description", $aboutContent);
    }

    /**
     * @return void
     */
    public function testEducationNotShouldReturnEmpty()
    {
        $educationContent = $this->profileService->education();
        $this->assertIsArray($educationContent);
        $this->assertNotEmpty($educationContent);
        $this->assertCount(1, $educationContent);
        $this->assertArrayHasKey("institution", $educationContent);
    }

    /**
     * @return void
     */
    public function testExperienceNotShouldReturnEmpty()
    {
        $experienceContent = $this->profileService->experience();
        $this->assertIsArray($experienceContent);
        $this->assertNotEmpty($experienceContent);
        $this->assertCount(6, $experienceContent);
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
        $this->assertCount(2, $skillsContent);
        $this->assertArrayHasKey("technologies", $skillsContent);
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
        $this->assertCount(11, $worksContent);
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
        $this->assertCount(3, $contactContent);
        $this->assertArrayHasKey("email", $contactContent);
        $this->assertArrayHasKey("linkedin", $contactContent);
        $this->assertArrayHasKey("github", $contactContent);
    }
}
