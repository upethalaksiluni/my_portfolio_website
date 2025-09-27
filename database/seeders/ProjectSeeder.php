<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'The Gallery Café Website',
                'description' => 'A feature-rich platform for table reservations, pre-ordering, and shopping cart with multi-level login system.',
                'long_description' => 'Comprehensive café management system built with Laravel and Vue.js. Features include real-time table reservations, online menu ordering, shopping cart functionality, payment integration, admin dashboard for managing orders and reservations, customer management system, and detailed analytics.',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Tailwind CSS', 'JavaScript', 'PHP'],
                'github_url' => 'https://github.com/upethalaksiluni/gallery-cafe',
                'demo_url' => null,
                'featured' => true,
                'order' => 1,
                'image' => 'projects/gallery-cafe.png',
            ],
            [
                'title' => 'Salon Management App & Website',
                'description' => 'Streamlines salon bookings, customer management, and real-time services with API integration.',
                'long_description' => 'Complete salon management solution with appointment scheduling, customer profiles, service management, staff scheduling, payment processing, and reporting dashboard. Built with responsive design for both web and mobile access.',
                'technologies' => ['PHP', 'MySQL', 'Bootstrap', 'JavaScript', 'REST API'],
                'github_url' => 'https://github.com/upethalaksiluni/salon-management',
                'demo_url' => null,
                'featured' => true,
                'order' => 2,
                'image' => 'projects/salon-management.png',
            ],
            [
                'title' => 'TechFix Service-Oriented App',
                'description' => 'Simplifies procurement and inventory for computer shops with real-time stock management.',
                'long_description' => 'Enterprise-level inventory management system for computer repair shops. Features automated ordering, real-time stock tracking, supplier management, service scheduling, customer management, and detailed reporting with analytics.',
                'technologies' => ['Java', 'Spring Boot', 'MySQL', 'Android', 'REST API'],
                'github_url' => 'https://github.com/upethalaksiluni/techfix-app',
                'demo_url' => null,
                'featured' => true,
                'order' => 3,
                'image' => 'projects/techfix-app.png',
            ],
            [
                'title' => 'Dog Food App (Android)',
                'description' => 'A sleek mobile app built in Java (Android Studio) for pet food purchases with user-friendly interface.',
                'long_description' => 'Native Android application for pet food e-commerce. Features product catalog, shopping cart, user authentication, order tracking, push notifications, and payment gateway integration. Built with modern Android architecture patterns.',
                'technologies' => ['Java', 'Android Studio', 'SQLite', 'REST API', 'Firebase'],
                'github_url' => 'https://github.com/upethalaksiluni/dog-food-app',
                'demo_url' => null,
                'featured' => false,
                'order' => 4,
                'image' => 'projects/dog-food-app.png',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}