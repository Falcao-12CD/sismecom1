using Dapper;
using Sismecom.Infra.Data;
using Sismecom.Models.Consultas;
using Sismecom.Models.Pessoas;
using System.Data;

namespace Sismecom.Infra.Repository.Consultas
{
    public class ConsultaRepository : IConsultaRepository
    {
        private readonly IDbConnection _conexao;

        public ConsultaRepository()
        {
            _conexao = new Conexao().ConectarMySql();
        }
        public bool AgendarConsulta(ConsultaRequest request)
        {
            var sql = @"INSERT INTO consulta
                        (
                            especialidade,
                            data_consulta,
                            hora_consulta,
                            fk_paciente,
                            fk_medico,
                            pagamento,
                            fk_recepcionista
                        )
                        VALUES
                        (
                            @Especialidade,
                            @dataConsulta,
                            @horaConsulta,
                            @PacienteId,
                            @MedicoId,
                            @Valor,
                            @RecepcionistaId
                        );";

            using (_conexao)
            {
               return  _conexao.Execute(sql, request) > 0;
            }
        }

        public bool CancelarConsulta(Consulta consulta)
        {
            var sql = @"UPDATE consulta set data_cancelamento = now() where num_consulta = @num_consulta";

            using (_conexao)
            {
                return _conexao.Execute(sql, consulta) > 0;
            }
        }

        public IEnumerable<ConsultaResponse> ListarPorMedico(Medico medico)
        {
            var sql = @"select * from consulta where fk_medico = @num_matricula and  data_cancelamento is null ";

            using (_conexao)
            {
                return _conexao.Query<ConsultaResponse>(sql, medico);
            }
        }

        public IEnumerable<ConsultaResponse> ListarPorPaciente(Paciente paciente)
        {
            var sql = @"select * from consulta where fk_paciente = @id and  data_cancelamento is null ";

            using (_conexao)
            {
                return _conexao.Query<ConsultaResponse>(sql, paciente);
            }
        }
    }
}
