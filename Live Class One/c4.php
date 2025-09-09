<?php
$personProfile = [
    'name' => 'John Doe',
    'age' => 34,
    'gender' => 'male',
    'contact' => [
        'email' => 'john.doe@example.com',
        'phone' => '+1-555-1234',
        'address' => [
            'street' => '123 Main St',
            'city' => 'Springfield',
            'state' => 'IL',
            'zip' => '62704',
            'country' => 'USA'
        ]
    ],
    'education' => [
        [
            'degree' => 'BSc Computer Science',
            'institution' => 'Springfield University',
            'year' => 2012,
            'details' => [
                'gpa' => 3.8,
                'honors' => true
            ]
        ],
        [
            'degree' => 'MSc Data Science',
            'institution' => 'Tech Institute',
            'year' => 2015,
            'details' => [
                'gpa' => 3.9,
                'honors' => false
            ]
        ]
    ],
    'work_experience' => [
        [
            'company' => 'Acme Corp',
            'position' => 'Software Engineer',
            'years' => 3,
            'projects' => [
                [
                    'name' => 'Inventory System',
                    'role' => 'Lead Developer',
                    'technologies' => ['PHP', 'MySQL', 'JavaScript']
                ],
                [
                    'name' => 'E-commerce Platform',
                    'role' => 'Backend Developer',
                    'technologies' => ['Laravel', 'Redis']
                ]
            ]
        ],
        [
            'company' => 'Globex Inc',
            'position' => 'Senior Data Analyst',
            'years' => 2,
            'projects' => [
                [
                    'name' => 'Market Analysis',
                    'role' => 'Data Scientist',
                    'technologies' => ['Python', 'TensorFlow']
                ]
            ]
        ]
    ],
    'skills' => [
        'programming' => ['PHP', 'Python', 'JavaScript', 'SQL'],
        'soft_skills' => ['communication', 'leadership', 'problem-solving']
    ],
    'hobbies' => [
        'sports' => ['basketball', 'cycling'],
        'music' => [
            'instruments' => ['guitar', 'piano'],
            'genres' => ['rock', 'jazz']
        ],
        'travel' => [
            'countries_visited' => ['Canada', 'Germany', 'Japan']
        ]
    ],
    'social' => [
        'linkedin' => 'https://linkedin.com/in/johndoe',
        'github' => 'https://github.com/johndoe',
        'twitter' => '@john_doe'
    ]
];

// $json = json_encode($personProfile, JSON_PRETTY_PRINT);
// file_put_contents("profile.json", $json);

$personeData = file_get_contents('profile.json');
$persone = json_decode($personeData, true);
echo $persone['name'];
echo "\n";