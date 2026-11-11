<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create(['name' => 'Admin', 'email' => 'admin@perpus.test', 'password' => 'password', 'role' => 'admin']);
        User::create(['name' => 'Aflah', 'email' => 'siswa@perpus.test', 'password' => 'password', 'role' => 'siswa', 'kelas' => 'XII RPL 3']);

        Book::create(['title' => 'Kisera', 'author' => 'sudharmono', 'publisher' => 'ganesha', 'year' => 2021, 'stock' => 7]);
        Book::create(['title' => 'kayama', 'author' => 'zulqadri', 'publisher' => 'Gramedia', 'year' => 2010, 'stock' => 2]);
        Book::create(['title' => 'Belajar Laravel', 'author' => 'Budi', 'publisher' => 'brainly', 'year' => 2012, 'stock' => 4]);
    }
}