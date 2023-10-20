<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\SessionMember;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $itemsToDelete = SessionMember::select('session_id', 'client_id')
            ->selectRaw('MIN(id) as first_id')
            ->groupBy('session_id', 'client_id')
            ->havingRaw('COUNT(*) > 1')
            ->get();
        foreach ($itemsToDelete as $row) {
            Session::where('session_id', $row->session_id)
                ->where('client_id', $row->client_id)
                ->where('id', '<>', $row->first_id)
                ->delete();
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('session_members', function (Blueprint $table) {
            //
        });
    }
};
