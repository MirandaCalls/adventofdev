<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Gift extends Model
{
    use Sushi;

    protected $rows = [
        [
            'name' => 'keyboard',
            'date' => '2023-12-01',
            'description' => 'A high-quality mechanical keyboard for comfortable coding sessions.',
        ],
        [
            'name' => 'headphones',
            'date' => '2023-12-02',
            'description' => 'A set of noise-cancelling headphones to block out distractions.',
        ],
        [
            'name' => 'raspberry-pi',
            'date' => '2023-12-03',
            'description' => 'A raspberry PI kit for fun DIY projects.',
        ],
        [
            'name' => 'online-course',
            'date' => '2023-12-04',
            'description' => 'A subscription to an online coding course or resource.',
        ],
        [
            'name' => 'smartwatch',
            'date' => '2023-12-05',
            'description' => 'A smartwatch to track productivity and health.',
        ],
        [
            'name' => 'power-bank',
            'date' => '2023-12-06',
            'description' => 'A portable power bank for coding on the go.',
        ],
        [
            'name' => 'book',
            'date' => '2023-12-07',
            'description' => 'A book on a new programming language or framework.',
        ],
        [
            'name' => 'coffee',
            'date' => '2023-12-08',
            'description' => 'A coffee subscription to fuel those late-night coding sessions.',
        ],
        [
            'name' => 'desk-organizer',
            'date' => '2023-12-09',
            'description' => 'A desk organizer to keep things tidy.',
        ],
        [
            'name' => 'glasses',
            'date' => '2023-12-10',
            'description' => 'A pair of blue light blocking glasses to reduce eye strain.',
        ],
        [
            'name' => 'shirt',
            'date' => '2023-12-11',
            'description' => 'A fun coding-themed t-shirt or hoodie.',
        ],
        [
            'name' => 'mug',
            'date' => '2023-12-12',
            'description' => 'A coding-themed mug for their favorite beverages.',
        ],
        [
            'name' => 'notebooks',
            'date' => '2023-12-13',
            'description' => 'A set of high-quality coding notebooks.',
        ],
        [
            'name' => 'standing-desk',
            'date' => '2023-12-14',
            'description' => 'A standing desk converter for a healthier work setup.',
        ],
        [
            'name' => 'editor',
            'date' => '2023-12-15',
            'description' => 'A professional code editor or IDE license.',
        ],
        [
            'name' => 'conference',
            'date' => '2023-12-16',
            'description' => 'A membership to a tech conference or event.',
        ],
        [
            'name' => 'board-game',
            'date' => '2023-12-17',
            'description' => 'A coding-themed board game for relaxation.',
        ],
        [
            'name' => 'magazine',
            'date' => '2023-12-18',
            'description' => 'A subscription to a tech magazine or publication.',
        ],
        [
            'name' => 'chair',
            'date' => '2023-12-19',
            'description' => 'An ergonomic chair for better posture during long coding sessions.',
        ],
        [
            'name' => 'stickers',
            'date' => '2023-12-20',
            'description' => 'A set of tech-themed stickers for their laptop.',
        ],
        [
            'name' => 'usb-hub',
            'date' => '2023-12-21',
            'description' => 'A USB-C hub for connectivity options.',
        ],
        [
            'name' => 'code-backups',
            'date' => '2023-12-22',
            'description' => 'A subscription to a cloud storage service for code backups.',
        ],
        [
            'name' => 'code-challenges',
            'date' => '2023-12-23',
            'description' => 'A coding challenge book to keep skills sharp.',
        ],
        [
            'name' => 'thank-you',
            'date' => '2023-12-24',
            'description' => 'A heartfelt thank-you note acknowledging your hard work and dedication.',
        ],
    ];
}
