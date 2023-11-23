using Sismecom.Models.Consultas;
using Sismecom.Models.Pessoas;

namespace Sismecom.Infra.Repository.Consultas
{
    public interface IConsultaRepository
    {
        bool AgendarConsulta(ConsultaRequest request);
        bool CancelarConsulta(Consulta consulta);
        IEnumerable<ConsultaResponse> ListarPorMedico(Medico medico);
        IEnumerable<ConsultaResponse> ListarPorPaciente(Paciente medico);
    }
}