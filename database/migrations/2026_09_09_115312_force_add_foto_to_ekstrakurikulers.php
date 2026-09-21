public function up(): void
{
    if (!Schema::hasColumn('ekstrakurikulers', 'foto')) {
        Schema::table('ekstrakurikulers', function (Blueprint $table) {
            $table->string('foto')->nullable();
        });
    }
}

public function down(): void
{
    //
}