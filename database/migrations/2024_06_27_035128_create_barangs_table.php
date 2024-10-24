    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('barangs', function (Blueprint $table) {
                $table->id();
                $table->string('Nama_Barang');
                $table->unsignedBigInteger('Id_Kategori');
                $table->integer('Stok');
                $table->string('Harga');
                $table->string('Gambar');
                $table->text('Deskripsi');
                $table->timestamps();
                $table->foreign('Id_Kategori')->references('id')->on('Kategoris')->onDelete('cascade');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('barangs');
        }
    };
