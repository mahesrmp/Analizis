<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Reply;
use App\Models\Discussion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DiscussionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Reply::truncate();
        Discussion::truncate();
        User::truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Buat user-user yang diperlukan
        $christina = User::create([
            'name' => 'Christina',
            'email' => 'christina@example.com',
            'password' => bcrypt('password'),
            'role' => 'user'
        ]);

        $budi = User::create([
            'name' => 'Budi',
            'email' => 'budi@example.com',
            'password' => bcrypt('password'),
            'role' => 'user'
        ]);

        $sinta = User::create([
            'name' => 'Sinta',
            'email' => 'sinta@example.com',
            'password' => bcrypt('password'),
            'role' => 'user'
        ]);

        $dimas = User::create([
            'name' => 'Dimas',
            'email' => 'dimas@example.com',
            'password' => bcrypt('password'),
            'role' => 'user'
        ]);

        $anita = User::create([
            'name' => 'Anita',
            'email' => 'anita@example.com',
            'password' => bcrypt('password'),
            'role' => 'user'
        ]);

        // Discussion 1
        $discussion1 = Discussion::create([
            'user_id' => $christina->id,
            'title' => 'Pengaruh Media Sosial pada Kehidupan Remaja',
            'content' => 'Bagaimana pendapat kalian tentang pengaruh media sosial terhadap perkembangan mental remaja? Apakah lebih banyak dampak positif atau negatif?',
            'created_at' => now()->subHours(2),
        ]);

        Reply::create([
            'discussion_id' => $discussion1->id,
            'user_id' => $budi->id,
            'content' => 'Menurut saya, media sosial memiliki dua sisi. Sisi positifnya adalah remaja bisa mendapatkan informasi dengan cepat dan terhubung dengan teman. Namun, sisi negatifnya adalah kecanduan dan cyberbullying yang semakin meningkat.',
            'created_at' => now()->subHour(),
        ]);

        Reply::create([
            'discussion_id' => $discussion1->id,
            'user_id' => $sinta->id,
            'content' => 'Saya setuju dengan Budi. Yang penting adalah bagaimana orang tua mengawasi penggunaan media sosial oleh anak-anak mereka.',
            'created_at' => now()->subMinutes(30),
        ]);

        // Discussion 2
        $discussion2 = Discussion::create([
            'user_id' => $dimas->id,
            'title' => 'Strategi Belajar Efektif untuk Ujian',
            'content' => 'Halo teman-teman, saya ingin berbagi pengalaman tentang cara belajar yang efektif untuk persiapan ujian. Apa tips dan trik yang kalian gunakan?',
            'created_at' => now()->subHours(3),
        ]);

        Reply::create([
            'discussion_id' => $discussion2->id,
            'user_id' => $anita->id,
            'content' => 'Saya biasanya membuat mind mapping untuk memudahkan memahami konsep-konsep penting.',
            'created_at' => now()->subHours(2),
        ]);
    }
}
