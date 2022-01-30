<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class userExpire extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'status:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check user status active or nonactive';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $users = User::where('status', 'active')->get();
        // foreach ($users as $user) {
        //     $user->update(['status' => 'nonactive']);
        //     echo "User with ID".$user->id." has been updated";
        // }
        $users = DB::table('users')->where('status', '=', 'nonactive')->update(['status' => 'active']);

    }
}
