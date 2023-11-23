using MySqlConnector;
using System.Data;

namespace Sismecom.Infra.Data
{
    public class Conexao
    {
        public IDbConnection ConectarMySql()
        {
            string con = "Server=localhost;Port=3306;Database=db_sismecom;uid=root;pwd=Vpmr0BNHP1;";
            return new MySqlConnection(con);
        }
    }
}
