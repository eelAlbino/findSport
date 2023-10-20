<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Session;

return new class() extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $itemsToDelete = Session::select('start_time', 'session_configuration_id')->selectRaw('MIN(id) as first_id')
            ->groupBy('start_time', 'session_configuration_id')
            ->havingRaw('COUNT(*) > 1')
            ->get();

        foreach ($itemsToDelete as $row) {
            Session::where('start_time', $row->start_time)
                ->where('session_configuration_id', $row->session_configuration_id)
                ->where('id', '<>', $row->first_id)
                ->delete();
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
