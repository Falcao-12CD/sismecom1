using Dapper;
using Sismecom.Infra.Data;
using Sismecom.Models.Pessoas;
using System.Data;
using System.Diagnostics;

namespace Sismecom.Infra.Repository.Pessoas
{
    public class MedicoRepository : IMedicoRepository
    {
        private readonly IDbConnection _conexao;

        public MedicoRepository()
        {
            _conexao = new Conexao().ConectarMySql();
        }
        public void Cadastrar(Medico medico)
        {
            try
            {
                using (_conexao)
                {
                    var sql = @"INSERT INTO medico
                                (nome,
                                especialidade,
                                cod_crm,
                                senha,
                                cpf,
                                email,
                                endereco,
                                genero)
                                VALUES
                                (@nome,
                                @especialidade,
                                @cod_crm,
                                @senha,
                                @cpf,
                                @email,
                                @endereco,
                                @genero);";
                    var rows = _conexao.Execute(sql, medico);
                    if (rows <= 0) throw new InvalidDataException("Erro ao salvar Medico");
                }
            }
            catch (Exception ex)
            {
                Debug.WriteLine(ex);
            }
        }

        public IEnumerable<Medico> Listar()
        {
            using (_conexao)
            {
                var sql = "select * from medico";
                return _conexao.Query<Medico>(sql);
            }
        }

        public Medico ObterPorId(int id)
        {
            using (_conexao)
            {
                var sql = "select * from medico where num_matricula = @id";
                return _conexao.QueryFirst<Medico>(sql, new { id });
            }
        }
    }
}
