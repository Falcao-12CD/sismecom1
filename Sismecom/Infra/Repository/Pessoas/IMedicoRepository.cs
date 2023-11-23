using Sismecom.Models.Pessoas;

namespace Sismecom.Infra.Repository.Pessoas
{
    public interface IMedicoRepository
    {
        IEnumerable<Medico> Listar();
        Medico ObterPorId(int id);
        void Cadastrar(Medico medico);
    }
}
