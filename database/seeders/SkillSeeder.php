<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            // Programming Languages
            ['name' => 'Java', 'category' => 'Programming Languages', 'proficiency' => 90, 'featured' => true, 'order' => 1, 'color' => '#f89820'],
            ['name' => 'C#', 'category' => 'Programming Languages', 'proficiency' => 85, 'featured' => true, 'order' => 2, 'color' => '#239120'],
            ['name' => 'Python', 'category' => 'Programming Languages', 'proficiency' => 80, 'featured' => true, 'order' => 3, 'color' => '#3776ab'],
            ['name' => 'JavaScript', 'category' => 'Programming Languages', 'proficiency' => 88, 'featured' => true, 'order' => 4, 'color' => '#f7df1e'],
            ['name' => 'PHP', 'category' => 'Programming Languages', 'proficiency' => 85, 'featured' => true, 'order' => 5, 'color' => '#777bb4'],
            ['name' => 'C++', 'category' => 'Programming Languages', 'proficiency' => 75, 'featured' => false, 'order' => 6, 'color' => '#00599c'],
            ['name' => 'Ruby', 'category' => 'Programming Languages', 'proficiency' => 70, 'featured' => false, 'order' => 7, 'color' => '#cc342d'],
            
            // Frameworks & Libraries
            ['name' => 'Laravel', 'category' => 'Frameworks', 'proficiency' => 90, 'featured' => true, 'order' => 1, 'color' => '#ff2d20'],
            ['name' => 'Vue.js', 'category' => 'Frameworks', 'proficiency' => 85, 'featured' => true, 'order' => 2, 'color' => '#4fc08d'],
            ['name' => 'React', 'category' => 'Frameworks', 'proficiency' => 80, 'featured' => true, 'order' => 3, 'color' => '#61dafb'],
            ['name' => 'Node.js', 'category' => 'Frameworks', 'proficiency' => 75, 'featured' => true, 'order' => 4, 'color' => '#339933'],
            ['name' => 'Django', 'category' => 'Frameworks', 'proficiency' => 70, 'featured' => false, 'order' => 5, 'color' => '#092e20'],
            ['name' => 'Angular', 'category' => 'Frameworks', 'proficiency' => 65, 'featured' => false, 'order' => 6, 'color' => '#dd0031'],
            ['name' => 'Spring Boot', 'category' => 'Frameworks', 'proficiency' => 75, 'featured' => false, 'order' => 7, 'color' => '#6db33f'],
            
            // Database & Tools
            ['name' => 'MySQL', 'category' => 'Database', 'proficiency' => 85, 'featured' => true, 'order' => 1, 'color' => '#4479a1'],
            ['name' => 'PostgreSQL', 'category' => 'Database', 'proficiency' => 70, 'featured' => false, 'order' => 2, 'color' => '#336791'],
            ['name' => 'MongoDB', 'category' => 'Database', 'proficiency' => 65, 'featured' => false, 'order' => 3, 'color' => '#47a248'],
            ['name' => 'SQLite', 'category' => 'Database', 'proficiency' => 80, 'featured' => false, 'order' => 4, 'color' => '#003b57'],
            
            // DevOps & Cloud
            ['name' => 'Docker', 'category' => 'DevOps', 'proficiency' => 75, 'featured' => true, 'order' => 1, 'color' => '#2496ed'],
            ['name' => 'AWS', 'category' => 'DevOps', 'proficiency' => 70, 'featured' => true, 'order' => 2, 'color' => '#ff9900'],
            ['name' => 'Git', 'category' => 'DevOps', 'proficiency' => 85, 'featured' => true, 'order' => 3, 'color' => '#f05032'],
            ['name' => 'CI/CD', 'category' => 'DevOps', 'proficiency' => 70, 'featured' => false, 'order' => 4, 'color' => '#326ce5'],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}