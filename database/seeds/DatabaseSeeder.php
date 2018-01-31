<?php

use Illuminate\Database\Seeder;
use App\Itens;
use App\cursos;
use App\cursos_disciplina;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('ItensTableSeeder');
        $this->call('CursoTableSeeder');
        $this->call('CDTableSeeder');
    }

}
class ItensTableSeeder extends Seeder{

    public function run()
    {
        DB::table('disciplines')->delete();
        Itens::create([
            'code' =>'ADM202',
            'name'=>'COMUNICAÇÃO',
            'curriculum'=>'20111',
            'load'=>68,
        ]);
        Itens::create([
            'code' => 'ADMF52',
            'name'=>'HABILIDADES  E COMPETÊNCIAS DO ADMINISTRADOR',
            'curriculum'=>'20102',
            'load'=>34,
        ]);
        Itens::create([
            'code' =>'ADMF54',
            'name'=>'ESTUDOS ORGANIZACIONAIS I',
            'curriculum'=>'20102',
            'load'=>68,
        ]);
        Itens::create([
            'code' =>'ADMF56',
            'name'=>'INICIAÇÃO CIENTÍFICA',
            'curriculum'=>'20102',
            'load'=>34,
        ]);
        Itens::create([
            'code' =>'DIR159',
            'name'=>'INSTITUICAO DE DIREITO PUBLICO E PRIVADO',
            'curriculum'=>'20041',
            'load'=>68,
        ]);

    }

}

class CursoTableSeeder extends Seeder{

    public function run()
    {
        DB::table('courses')->delete();
        cursos::create([
            'name' =>'ADMINISTRAÇÃO   - SALVADOR',
            'code'=>'316130',
            'curriculum'=>'20111',
            'area_id'=>1,
        ]);
        cursos::create([
            'name' => 'ARQUITETURA E URBANISMO',
            'code'=>'187140',
            'curriculum'=>'20102',
            'area_id'=>3,
        ]);
        cursos::create([
            'name' =>'ARQUIVOLOGIA',
            'code'=>'381140',
            'curriculum'=>'20102',
            'area_id'=>4,
        ]);
        cursos::create([
            'name' =>'SISTEMAS DE INFORMAÇÂO',
            'code'=>'I76473',
            'curriculum'=>'20102',
            'area_id'=>2,
        ]);
        cursos::create([
            'name' =>'CIENCIA DA COMPUTAÇÂO',
            'code'=>'98453',
            'curriculum'=>'20041',
            'area_id'=>1,
        ]);

    }

}

class CDTableSeeder extends Seeder{

    public function run()
    {
        DB::table('course_disciplines')->delete();
        cursos_disciplina::create([
            'semester' =>1,
            'nature'=>'OB',
            'course_id'=>1,
            'discipline_id'=>1,
        ]);
        cursos_disciplina::create([
            'semester' => 2,
            'nature'=>'OB',
            'course_id'=>2,
            'discipline_id'=>2,
        ]);
        cursos_disciplina::create([
            'semester' =>3,
            'nature'=>'OP',
            'course_id'=>3,
            'discipline_id'=>3,
        ]);
        cursos_disciplina::create([
            'semester' =>1,
            'nature'=>'OP',
            'course_id'=>4,
            'discipline_id'=>4,
        ]);
        cursos_disciplina::create([
            'semester' =>2,
            'nature'=>'OP',
            'course_id'=>5,
            'discipline_id'=>4,
        ]);

    }

}

