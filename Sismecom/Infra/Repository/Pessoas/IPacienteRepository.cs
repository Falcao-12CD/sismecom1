using Sismecom.Models.Pessoas;

namespace Sismecom.Infra.Repository.Pessoas
{
    public interface IPacienteRepository
    {
        IEnumerable<Paciente> Listar();
        void Cadastrar(Paciente model);
        Paciente ObterPorId(int id);
    }
}
