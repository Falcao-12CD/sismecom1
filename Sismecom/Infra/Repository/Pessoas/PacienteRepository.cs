using Dapper;
using Sismecom.Infra.Data;
using Sismecom.Models.Pessoas;
using System.Data;
using System.Diagnostics;

namespace Sismecom.Infra.Repository.Pessoas
{
    public class PacienteRepository : IPacienteRepository
    {
        private readonly IDbConnection _conexao;

        public PacienteRepository()
        {
            _conexao = new Conexao().ConectarMySql();
        }
        public void Cadastrar(Paciente model)
        {
            try
            {
                using (_conexao)
                {
                    var sql = @"INSERT INTO paciente
                                (
                                    cpf,
                                    data_nascimento,
                                    nome,
                                    genero,
                                    endereco,
                                    telefone,
                                    email,
                                    senha
                                )
                                VALUES
                                (
                                    @cpf,
                                    @data_nascimento,
                                    @nome,
                                    @genero,
                                    @endereco,
                                    @telefone,
                                    @email,
                                    @senha
                                );";
                    var rows = _conexao.Execute(sql, model);
                    if (rows <= 0) throw new InvalidDataException("Erro ao salvar Paciente");
                }
            }
            catch (Exception ex)
            {
                Debug.WriteLine(ex);
            }
        }

        public IEnumerable<Paciente> Listar()
        {

            using (_conexao)
            {
                var sql = "select * from paciente";
                return _conexao.Query<Paciente>(sql);
            }
        }

        public Paciente ObterPorId(int id)
        {
            throw new NotImplementedException();
        }
    }
}
