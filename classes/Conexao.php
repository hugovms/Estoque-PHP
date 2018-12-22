 <?php


class Conexao
{
	 public static function pegarConexao()
	 {
	 	 try
            {
            $conexao = new PDO(DB_DRIVE . ':host='. DB_HOSTNAME . ';dbname='.DB_DATABASE, DB_USERNAME, DB_PASSWORD);
            return $conexao;
            } 
        catch(PDOException $e)
            {
                throw new PDOException($e);
                return $e;
            }

	 }
}