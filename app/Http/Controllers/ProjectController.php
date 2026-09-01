<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.index');
    }

    public function show($slug)
    {
        $projects = [

            'apar-hydrant' => [
                'title' => 'APAR & Hydrant Management System',
                'category' => 'Management System',
                'description' => 'A web-based system for digitizing inspection and monitoring of fire extinguishers and hydrant equipment.',
                'year' => '2026',
                'status' => 'Completed',
                'color' => 'red',
                'likes' => 0,

                'overview' => 'A digital management system designed to help manage, inspect, and monitor APAR and hydrant equipment in a more organized and efficient way.',

                'problem' => 'Manual inspection and record management can make it difficult to monitor equipment conditions, inspection history, and maintenance status.',

                'solution' => 'The system centralizes equipment data, inspection records, QR Code identification, and monitoring into one web-based platform.',

                'challenges' => [
                    [
                        'title' => 'Database Synchronization',
                        'description' => 'Menyesuaikan struktur database dengan kebutuhan sistem.'
                    ],
                    [
                        'title' => 'QR Scanner',
                        'description' => 'Mengatasi masalah kamera yang tidak terdeteksi saat melakukan scanning.'
                    ],
                    [
                        'title' => 'Deployment',
                        'description' => 'Menyesuaikan konfigurasi Laravel agar dapat berjalan pada server hosting.'
                    ],
                ],

                'features' => [
                    'APAR & Hydrant Management',
                    'QR Code Scanning',
                    'Equipment Inspection',
                    'Expired & Damaged Equipment Tracking',
                    'Inspection History',
                    'Dashboard & Statistics',
                    'User Authentication',
                    'Database Management',
                ],

                'technologies' => [
                    'Laravel',
                    'PHP',
                    'MySQL',
                    'Tailwind CSS',
                    'JavaScript',
                    'QR Scanner',
                ],

                'role' => [
                    'UI/UX Design',
                    'Frontend Development',
                    'Backend Development',
                    'Database Design',
                    'System Development',
                    'Deployment',
                ],

                'github' => 'https://github.com/',
                'demo' => '#',

                'image' => 'images/projects/apar&hydrant.png',

                'screenshots' => [],
            ],


            'afinance' => [
                'title' => 'AFinance',
                'category' => 'Web Application',
                'description' => 'A financial management application designed to organize, record, and monitor personal financial activity.',
                'year' => '2026',
                'status' => 'In Development',
                'color' => 'violet',
                'likes' => 0,

                'overview' => 'A web-based financial management application designed to help users organize and monitor their financial activities.',

                'problem' => 'Managing personal financial records manually can make it difficult to understand spending patterns and track financial activity.',

                'solution' => 'AFinance provides a centralized platform for recording and monitoring financial transactions.',

                'challenges' => [
                    [
                        'title' => 'Database Synchronization',
                        'description' => 'Menyesuaikan struktur database dengan kebutuhan sistem.'
                    ],
                    [
                        'title' => 'QR Scanner',
                        'description' => 'Mengatasi masalah kamera yang tidak terdeteksi saat melakukan scanning.'
                    ],
                    [
                        'title' => 'Deployment',
                        'description' => 'Menyesuaikan konfigurasi Laravel agar dapat berjalan pada server hosting.'
                    ],
                ],

                'features' => [
                    'Financial Dashboard',
                    'Income Management',
                    'Expense Management',
                    'Transaction Records',
                    'Financial Statistics',
                    'User Authentication',
                ],

                'technologies' => [
                    'Laravel',
                    'PHP',
                    'MySQL',
                    'Tailwind CSS',
                ],

                'role' => [
                    'UI/UX Design',
                    'Frontend Development',
                    'Backend Development',
                    'Database Design',
                ],

                'github' => 'https://github.com/',
                'demo' => '#',

                'image' => null,

                'screenshots' => [],
            ],


            'ai-powered-website' => [
                'title' => 'AI-Powered Website',
                'category' => 'Artificial Intelligence',
                'description' => 'A web platform exploring the integration of artificial intelligence into modern web experiences.',
                'year' => '2026',
                'status' => 'In Development',
                'color' => 'purple',
                'likes' => 0,

                'overview' => 'A web platform exploring how artificial intelligence can be integrated into modern digital experiences.',

                'problem' => 'Modern websites increasingly require intelligent features to improve user interaction and productivity.',

                'solution' => 'The project explores the integration of AI services into a web-based environment.',

                'challenges' => [
                    [
                        'title' => 'Database Synchronization',
                        'description' => 'Menyesuaikan struktur database dengan kebutuhan sistem.'
                    ],
                    [
                        'title' => 'QR Scanner',
                        'description' => 'Mengatasi masalah kamera yang tidak terdeteksi saat melakukan scanning.'
                    ],
                    [
                        'title' => 'Deployment',
                        'description' => 'Menyesuaikan konfigurasi Laravel agar dapat berjalan pada server hosting.'
                    ],
                ],

                'features' => [
                    'AI Integration',
                    'Interactive Interface',
                    'API Integration',
                    'Dynamic Content',
                ],

                'technologies' => [
                    'JavaScript',
                    'API',
                    'AI',
                    'HTML',
                    'CSS',
                ],

                'role' => [
                    'UI/UX Design',
                    'Frontend Development',
                    'API Integration',
                ],

                'github' => 'https://github.com/',
                'demo' => '#',

                'image' => null,

                'screenshots' => [],
            ],


            'inventory-management' => [
                'title' => 'Inventory Management System',
                'category' => 'Management System',
                'description' => 'A digital inventory system for managing item data, stock levels, transactions, and inventory records.',
                'year' => '2026',
                'status' => 'Completed',
                'color' => 'cyan',
                'likes' => 0,

                'overview' => 'A centralized inventory management platform for monitoring stock and managing inventory transactions.',

                'problem' => 'Manual inventory tracking can lead to inaccurate stock information and inefficient record management.',

                'solution' => 'The system provides centralized inventory data, stock monitoring, and transaction management.',

                'challenges' => [
                    [
                        'title' => 'Database Synchronization',
                        'description' => 'Menyesuaikan struktur database dengan kebutuhan sistem.'
                    ],
                    [
                        'title' => 'QR Scanner',
                        'description' => 'Mengatasi masalah kamera yang tidak terdeteksi saat melakukan scanning.'
                    ],
                    [
                        'title' => 'Deployment',
                        'description' => 'Menyesuaikan konfigurasi Laravel agar dapat berjalan pada server hosting.'
                    ],
                ],

                'features' => [
                    'Inventory Management',
                    'Stock Monitoring',
                    'Item Management',
                    'Transaction Records',
                    'Inventory Reports',
                ],

                'technologies' => [
                    'Laravel',
                    'MySQL',
                    'Tailwind CSS',
                ],

                'role' => [
                    'Frontend Development',
                    'Backend Development',
                    'Database Design',
                ],

                'github' => 'https://github.com/',
                'demo' => '#',

                'image' => null,

                'screenshots' => [],
            ],


            'ecommerce-fullstack' => [
                'title' => 'E-Commerce Fullstack',
                'category' => 'Fullstack Development',
                'description' => 'A fullstack commerce platform covering products, shopping carts, user accounts, and orders.',
                'year' => '2026',
                'status' => 'In Development',
                'color' => 'pink',
                'likes' => 0,

                'overview' => 'A fullstack e-commerce platform designed to handle product management and online transaction workflows.',

                'problem' => 'Online businesses require an integrated system for managing products, customers, carts, and orders.',

                'solution' => 'The platform combines product management, shopping cart functionality, authentication, and order processing.',

                'challenges' => [
                    [
                        'title' => 'Database Synchronization',
                        'description' => 'Menyesuaikan struktur database dengan kebutuhan sistem.'
                    ],
                    [
                        'title' => 'QR Scanner',
                        'description' => 'Mengatasi masalah kamera yang tidak terdeteksi saat melakukan scanning.'
                    ],
                    [
                        'title' => 'Deployment',
                        'description' => 'Menyesuaikan konfigurasi Laravel agar dapat berjalan pada server hosting.'
                    ],
                ],

                'features' => [
                    'Product Management',
                    'Shopping Cart',
                    'User Authentication',
                    'Order Management',
                    'Transaction Workflow',
                ],

                'technologies' => [
                    'Laravel',
                    'MySQL',
                    'JavaScript',
                    'Tailwind CSS',
                ],

                'role' => [
                    'UI/UX Design',
                    'Frontend Development',
                    'Backend Development',
                    'Database Design',
                ],

                'github' => 'https://github.com/',
                'demo' => '#',

                'image' => null,

                'screenshots' => [],
            ],


            'student-information-system' => [
                'title' => 'Student Information System',
                'category' => 'Information System',
                'description' => 'A centralized system for managing student profiles, academic data, schedules, and educational information.',
                'year' => '2026',
                'status' => 'In Development',
                'color' => 'blue',
                'likes' => 0,

                'overview' => 'A centralized information system designed to manage student and academic information.',

                'problem' => 'Student and academic information can become difficult to manage when stored across disconnected records.',

                'solution' => 'The system centralizes student profiles, academic information, schedules, and related educational data.',

                'challenges' => [
                    [
                        'title' => 'Database Synchronization',
                        'description' => 'Menyesuaikan struktur database dengan kebutuhan sistem.'
                    ],
                    [
                        'title' => 'QR Scanner',
                        'description' => 'Mengatasi masalah kamera yang tidak terdeteksi saat melakukan scanning.'
                    ],
                    [
                        'title' => 'Deployment',
                        'description' => 'Menyesuaikan konfigurasi Laravel agar dapat berjalan pada server hosting.'
                    ],
                ],

                'features' => [
                    'Student Management',
                    'Academic Data',
                    'Schedule Management',
                    'Student Profiles',
                    'Information Dashboard',
                ],

                'technologies' => [
                    'PHP',
                    'MySQL',
                    'JavaScript',
                ],

                'role' => [
                    'UI/UX Design',
                    'Frontend Development',
                    'Backend Development',
                    'Database Design',
                ],

                'github' => 'https://github.com/',
                'demo' => '#',

                'image' => null,

                'screenshots' => [],
            ],
        ];

        if (!isset($projects[$slug])) {
            abort(404);
        }

        $project = $projects[$slug];

        $project = $projects[$slug];

        $project['slug'] = $slug;

        return view('projects.show', compact('project'));

    }
}
