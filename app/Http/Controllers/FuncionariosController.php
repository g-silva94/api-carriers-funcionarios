<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Funcionario;

class FuncionariosController extends Controller {

		public function report () {

			$funcionariosMasc = Funcionario::where('sexo', 'Masculino')->count();
			$funcionariosFem = Funcionario::where('sexo', 'Feminino')->count();
			$funcionariosMedia = Funcionario::avg('idade');
			$funcionariosMaxIdade = Funcionario::max('idade');
			$funcionariosMinIdade = Funcionario::min('idade');

			$aFuncionarios = array(
				'qtdMasc' => $funcionariosMasc,
				'qtdFem' => $funcionariosFem,
				'mediaIdade' => $funcionariosMedia,
				'maximaIdade' => $funcionariosMaxIdade,
				'minimaIdade' => $funcionariosMinIdade
			);

			return response()->json($aFuncionarios, 200);

		}

		public function index () {

			$funcionarios = Funcionario::get();
			return response()->json($funcionarios, 200);

		}

		public function show (Request $request){

			$funcionarios = Funcionario::find($request->id);
			return response()->json($funcionarios, 200);

		}

		public function store (Request $request) {

			if(strlen($request->nome) < 1){

				$error = array('msg' => 'Nome inválido');
				return response()->json($error, 400);
			}

			if(strlen($request->sobrenome) < 1) {

				$error = array('msg' => 'Sobrenome inválido');
				return response()->json($error, 400);
			}

			if($request->idade < 0 || $request->idade > 120){

				$error = array('msg' => 'Idade inválida');
				return response()->json($error, 400);

			}

			if($request->sexo != 'Masculino' && $request->sexo != 'Feminino'){

				$error = array('msg' => 'Sexo inválido');
				return response()->json($error, 400);

			}

			$funcionarios = Funcionario::create([
				'nome' => $request->nome,
				'sobrenome' => $request->sobrenome,
				'idade' => $request->idade,
				'sexo' => $request->sexo
			]);

			return response()->json($funcionarios, 200);

		}

		public function update (Request $request) {

			$aUpdate = array();

			if (strlen($request->nome) > 0) {

				$aUpdate['nome'] = $request->nome;

			}

			if (strlen($request->sobrenome) > 0) {

				$aUpdate['sobrenome'] = $request->sobrenome;
				
			}

			if ($request->idade > 0 && $request->idade < 120) {

				$aUpdate['idade'] = $request->idade;
				
			}

			if ($request->sexo == 'Masculino' || $request->sexo == 'Feminino') {

				$aUpdate['sexo'] = $request->sexo;
			
			}


			if (sizeof($aUpdate) < 1 ){

				$error = array('msg' => 'Parâmetros não enviados!');
				return response()->json($error, 400);

			} 

			$funcionarios = Funcionario::where('id', $request->id)->update($aUpdate);
			return response()->json($funcionarios, 200);

		}

		public function destroy (Request $request) {

			$funcionarios = Funcionario::where('id', $request->id)->delete();
			return response()->json($funcionarios, 200);

		}

}


?>