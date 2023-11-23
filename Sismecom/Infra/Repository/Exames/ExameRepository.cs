using Sismecom.Models.Exames;
using Sismecom.Models.Laboratorios;
using Sismecom.Models.Pessoas;

namespace Sismecom.Infra.Repository.Exames
{
    public class ExameRepository : IExameRepository
    {
        public bool AgendarExame(Paciente paciente, Laboratorio laboratorio)
        {
            throw new NotImplementedException();
        }

        public bool DesmarcarExame(Exame exame)
        {
            throw new NotImplementedException();
        }

        public IEnumerable<Exame> ListarExamesPorPaciente(Paciente paciente)
        {
            throw new NotImplementedException();
        }
    }
}
