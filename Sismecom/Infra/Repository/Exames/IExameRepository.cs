using Sismecom.Models.Exames;
using Sismecom.Models.Laboratorios;
using Sismecom.Models.Pessoas;

namespace Sismecom.Infra.Repository.Exames
{
    public interface IExameRepository
    {
        bool AgendarExame(Paciente paciente, Laboratorio laboratorio);
        bool DesmarcarExame(Exame exame);
        IEnumerable<Exame> ListarExamesPorPaciente(Paciente paciente);

    }
}
