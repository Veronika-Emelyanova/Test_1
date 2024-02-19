<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Contact;
use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()->count(5)->create();

        $contact = new Contact();
        $contact->name = 'Васнецов Александр Сергеевич';
        $contact->mobile_number = '+7 (953) 122-45-45';
        $contact->address = 'г.Тамбов, ул.Мичуринская 211Г, кв.65';
        $contact->email = 'vasnec.alex.11@gmail.com';
        $contact->save();
    }
}
